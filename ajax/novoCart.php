<?php
session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
include('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

$id_user = $_SESSION['id_user'];
?>

<div class="shopping-cart-header">
              <i class="fa fa-shopping-cart cart-icon"></i><span id="cart2" class="badge"></span>
                <div class="shopping-cart-total">
                  <span class="lighter-text">Total:</span>
                  <span class="main-color-text" id="total">R$</span>
                </div>
              </div> <!--end shopping-cart-header -->

            <ul class="shopping-cart-items" id="retornoCart">
            
            <?php

              $total = 0;

              $quantity = 0;

              $query_cart = "SELECT * FROM Carrinho
              INNER JOIN Produtos
              ON Carrinho.id_Prod = Produtos.id_Prod where Carrinho.usuario='{$id_user}'";

              $results = mysqli_query($conexao, $query_cart);

                while($row2 = $results->fetch_assoc()){
            
                   $total = $total + floatval(str_replace(',','.',$row2['preco'])) * $row2['quantidade'];

                   $quantity = $quantity + $row2['quantidade'];

                ?>
                <div class="row shopping-cart-items">
                  <div class="col-md-4" style="padding-left: 0;">
                    <img src="<?php echo $row2['caminho'];?>" alt="item1" />
                  </div>

                  <div class="col-md-6">
                    <span class="item-name"><?php echo $row2['nome_prod'];?></span>
                    <span class="item-price">R$ <?php echo $row2['preco'];?></span>
                  </div>

                  <div class="col-md-2" style="display: flex;justify-content: center;align-items: center;">
                  <div class="quantity">
                  <input type="number" min="1" max="<?php echo $row2['estoque'];?>" step="1" value="<?php echo $row2['quantidade'];?>">
                  </div>
                  </div>
                </div>
                    

                    <?php }; ?>
                </ul>
                <a href="/abaProdutos/index.php" class="button">Checkout</a>

    <script>
        document.getElementById('total').innerHTML="R$ " + <?php echo $total;?>;
        document.getElementById('cart_icon').setAttribute('data-totalitems',<?php echo $quantity;?>);
        document.getElementById('cart2').innerHTML=<?php echo $quantity;?>
    </script>