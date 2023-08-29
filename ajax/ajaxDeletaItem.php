<?php
session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
include('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

$id_prod = $_GET['id_prod'];
$aba = $_GET['aba'];
$id_user = $_SESSION['id_user'];

$where = "usuario='{$id_user}' and id_prod='{$id_prod}'";

$query_cartItem = "select * from Carrinho where ".$where;

$results_Item = mysqli_query($conexao, $query_cartItem);


    if($results_Item->num_rows > 0){
      $query_update = "delete from Carrinho where ".$where;
      $result_update = mysqli_query($conexao, $query_update);
    }

    $query_cart = "SELECT * FROM Carrinho 
    INNER JOIN Produtos
    ON Carrinho.id_Prod = Produtos.id_Prod where usuario='{$id_user}'";

    $results = mysqli_query($conexao, $query_cart);

    if($aba == 'cart'){ ?>

                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                     <thead>
                        <tr>
                           <th class="product-remove">&nbsp;</th>
                           <th class="product-thumbnail">&nbsp;</th>
                           <th class="product-name">Produto</th>
                           <th class="product-price">Preço</th>
                           <th class="product-quantity">Quantidade</th>
                           <th class="product-subtotal">Subtotal</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php
                          $total = 0;
                          $quantity = 0;
                           while($row2 = $results->fetch_assoc()){

                              $preco = number_format(str_replace(',','.',$row2['preco']), 2, '.', '');
                     
                              $total = $total + $preco * intval($row2['quantidade']);
                     
                              $quantity = $quantity + $row2['quantidade'];

                              $id_prod = $row2['id_prod'];

                              $rows []= array(
                                 'id_prod' => $row2['id_prod'],
                               );
                              
                        ?>
                        <tr class="woocommerce-cart-form__cart-item cart_item">
                           <td class="product-remove">
                              <a href="javascript:void(0);" onclick="removeItemCart(<?php echo $id_prod;?>)" class="remove" aria-label="Remove this item">&times;</a>						
                           </td>
                           <td class="product-thumbnail">
                              <a href="abaProdutos/abaProduto.php?id_prod="+<?php echo $id_prod;?>><img width="100px" height="100px" src="<?php echo $row2['caminho']; ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" /></a>						
                           </td>
                           <td class="product-name" data-title="Product">
                              <a href="javascript:void(0);"><?php echo $row2['nome_prod']; ?></a>						
                           </td>
                           <td class="product-price" style="padding: 0.2rem!important;" data-title="Price">
                              <span class="woocommerce-Price-amount amount" >R$<?php echo $preco; ?></span>			
                              <input type="hidden" value="<?php echo $preco; ?>" id="hdnPreco<?php echo $id_prod;?>" name="hdnPreco<?php echo $id_prod;?>">
                           </td>
                           <td class="product-quantity" data-title="Quantity">
                              <div class="quantity">
                                 <label class="form-label" for="txtQuantidade"></label>
                                 <input type="number" name="txtQuantidade<?php echo $id_prod;?>" id="txtQuantidade<?php echo $id_prod;?>" onchange="mudaSubTotal(this,<?php echo $id_prod;?>)" class="input-text qty text" step="1" value="<?php echo $row2['quantidade']; ?>" min="0" max="<?php echo $row2['estoque']; ?>" size="4" inputmode="numeric"/>
                              </div>
                           </td>
                           <td class="product-subtotal" style="padding: 0.2rem!important;" data-title="Subtotal">
                              <span class="woocommerce-Price-amount amount" id="txtSubtotal<?php echo $id_prod;?>">R$<?php echo number_format($preco * intval($row2['quantidade']), 2, '.', '');?></span>		
                              <input type="hidden" value="<?php echo number_format($preco * intval($row2['quantidade']), 2, '.', '');?>" id="hdnSubTotal<?php echo $id_prod;?>" name="hdnSubTotal<?php echo $id_prod;?>">				
                           </td>
                        </tr>
                        <?php } ?>
                        <tr>
                        <td colspan="6" class="actions">
                                <!--
                              <div class="coupon">
                                 <label for="txtCupom">Coupon:</label> <input type="text" name="txtCupom" class="input-text" id="txtCupom" value="" placeholder="Coupon code" /> <button type="button" class="button" name="btnCupom" onclick="applyCupom()" value="Aplicar Cupom<">Aplicar Cupom</button>
                              </div>
                              <br>	
                               -->
                           </td>
                        </tr>
                     </tbody>
                </table>
              <div class="cart-collaterals">
              </div>

              <script>
                function mudaTotal(){
                    let totalCart = 0;

                    let rows = <?php if (isset($rows) != ''){echo json_encode($rows);}else{echo '[]';}?>;

                    if(rows.length > 0){
                        for (const item of rows){
                            totalCart = totalCart + parseFloat(document.getElementById('hdnSubTotal'+item.id_prod).value)
                        }
                    }
                    console.log(totalCart);
                        document.getElementById('hdnTotalCart').value = totalCart;
                        document.getElementById('txtCartSubtotal').innerText="R$"+totalCart;
                        document.getElementById('txtCartTotal').innerText="R$"+totalCart;
                }
               </script>
               
               <script>
               jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
                  jQuery('.quantity').each(function() {
                     var spinner = jQuery(this),
                     input = spinner.find('input[type="number"]'),
                     btnUp = spinner.find('.quantity-up'),
                     btnDown = spinner.find('.quantity-down'),
                     min = input.attr('min'),
                     max = input.attr('max');

                     btnUp.click(function() {
                     var oldValue = parseFloat(input.val());
                     if (oldValue >= max) {
                        var newVal = oldValue;
                     } else {
                        var newVal = oldValue + 1;
                     }
                     spinner.find("input").val(newVal);
                     spinner.find("input").trigger("change");
                     });

                     btnDown.click(function() {
                     var oldValue = parseFloat(input.val());
                     if (oldValue <= min) {
                        var newVal = oldValue;
                     } else {
                        var newVal = oldValue - 1;
                     }
                     spinner.find("input").val(newVal);
                     spinner.find("input").trigger("change");
                     });

                  });
               </script>
              <?php }else{ ?>



                <?php  } ?>

