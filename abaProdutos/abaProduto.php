<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
session_start();
include('../conexao.php');
?>

<head>
  <title>PetShop</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link rel="icon" href="../Foto/paw-solid.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../styles/products.css">
  <?php include_once('../links.php')?>

  <style>
    .hoverProd{
      height: 100%!important;
      padding: 3.5rem 3rem;
      box-shadow: 0px 0px 12px rgb(0 0 0 / 8%);
      border-bottom: 0.25rem solid var(--base-color);
      border-radius: 0.25rem 0.25rem 0 0;
      text-align: center;
      cursor: pointer;
    }

    .img-thumbnail .hoverProd:hover{
      border: 1px solid #dadada;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
      border-bottom: 0.25rem solid var(--base-color);
      cursor: pointer;
    }
  </style>

</head>



<body>


      <?php include_once('../topmenu2.php')?>

  <!--Main layout-->
  <main>
    <div class="container dark-grey-text mt-3">

      <!--Grid row-->
      <div class="row wow fadeIn">
      
        <!--Grid column-->
        <div class="col-md-5 mb-4 d-flex align-items-center" style="padding: 3rem">

        <?php

        $img = "";

        $id_prod = $_GET['id_prod'];

        $queryBuscaProd = "select replace(descricao, '', '<br><br>') as descricao1, Produtos.* from Produtos WHERE id_prod = $id_prod";

        $result_queryBuscaProd = mysqli_query($conexao, $queryBuscaProd);

        $row = mysqli_fetch_array($result_queryBuscaProd);

        $queryBuscaProx = "select * from Produtos WHERE id_prod != $id_prod ORDER BY RAND() limit 3";

        $result_queryBuscaProx = mysqli_query($conexao, $queryBuscaProx);


        $msg = '';

         if(isset($id_prod) != ''){
               $img = $img = $row['caminho'];
               $desc = $row['descricao1'];
               $nome_prod = $row['nome_prod'];
               $preco = floatval($row['preco']);

               $precoDesc = (25 / 100) * $preco + $preco; 
         }
         else{
          $img = '';

          $desc = '';
  
          $nome_prod = '';

          $msg = 'Produto inexistente!, volte a tela de produtos selecione outro';
         }

        ?>

          <img src="<?php print $img;?>" class="img-fluid" alt=""><?php print $msg?>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 mb-4">

          <div class="p-4">

            <div class="mb-3">
              <a href="javascript:void(0);">
                <span class="badge purple mr-1"><?php print $row['class_prod'];?></span>
              </a>
              <a href="javascript:void(0);">
                <span class="badge blue mr-2">Novidades !</span>
              </a>
              <!-- <a href="">
                <span class="badge red mr-1">Bestseller</span>
              </a> -->
            </div>

            <p class="lead font-weight-bold"><?php print $nome_prod?></p>

            <p class="lead">
              <span class="mr-1">
                <del>R$ <?php print $precoDesc;?></del>
              </span>
              <span>R$ <?php print $preco;?></span>
            </p>

            <p class="lead font-weight-bold">Descrição</p>

            <p><?php print $desc?></p>

            <form class="d-flex justify-content-between">
              <!-- Default input -->
              <input type="number" value="1" max="<?php print $row['estoque']; ?>" min="0" id="numEstoque" name="numEstoque" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p <?php echo $preLogin;?>" type="button" style="background-color: #6AB99D!important;" <?php if(isset($_SESSION['id_user']) != ''){echo "onclick='addToCart(this,$id_prod)'";}?>>Adicionar ao Carrinho
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>
              <button class="btn btn-primary btn-md my-0 p <?php echo $preLogin;?>" type="button" style="background-color: #6AB99D!important;" <?php if(isset($_SESSION['id_user']) != ''){echo "onclick=addToCart(this,$id_prod,'compra')";}?> >Comprar Agora
              </button>
              

            </form>
            <br><p><?php print $row['estoque'];?> disponíveis</p>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">
          <h4 class="my-4 h4">Informações Adicionais</h4>
          <p style="text-align: left;font-size: 16px;">Em geral, nossa loja vende apenas produtos voltado para o mundo pet. Todos os produtos são testados e aprovados para trazer uma ótima qualidade, pois pensamos na saúde, conforto e bem estar dos nossos amiguinhos cães e gatos!<br>A DoguinhoFeliz segue sendo uma ótima opção para quem procura cuidar do seu melhor amigo sem pesar no bolso.</p>
        </div>
        <!--Grid column-->
      </div>
      <div class="row wow fadeIn">
        <?php
           while($row2 = $result_queryBuscaProx->fetch_assoc()){ ?>
        <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-center" style="padding: 3rem;">
         <a href="abaProdutos/abaProduto.php?id_prod=<?php print $row2['id_prod'];?>">
          <img src="<?php print $row2['caminho'];?>" class="img-thumbnail hoverProd" alt="">
        </a>
        </div>
        <?php }?>
      

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
      <?php include_once('../footer.php')?>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!--
  <script>
    function addCart(campo){
    var button = $(campo);
    var cart = $('.cart_icon');
     var cartTotal = cart.attr('data-totalitems');
    var newCartTotal = parseInt(cartTotal) + 1;
    
    button.addClass('sendtocart');
    setTimeout(function(){
      button.removeClass('sendtocart');
      cart.addClass('shake').attr('data-totalitems', newCartTotal);
      setTimeout(function(){
        cart.removeClass('shake');
        document.getElementById('cart2').innerText = newCartTotal
      },500)
      Swal.fire({
        icon: 'success',
        title: 'Produto adicionado com sucesso!',
        showConfirmButton: false,
        timer: 2000,
      })
    },1000)
  }
  </script>
  -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <script>
 $(function () {
   $('numEstoqaue').change(function() {
   var max = parseInt($(this).attr('max'));
   var min = parseInt($(this).attr('min'));
   if ($(this).val() >= max){
    alert('Quantidade indisponivel no estoque!');
      $(this).val(max);
      
   }
   else if ($(this).val() <= min){
      $(this).val(min);
   }       
 }); 
});
  </script>
</body>

</html>
