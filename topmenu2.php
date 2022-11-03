<?php
//  error_reporting(E_ALL);
//   ini_set('display_errors', '1');
 require_once('conexao.php');



date_default_timezone_set('America/Sao_Paulo');

if(isset($_SESSION['id_user']) != ''){
  $id_user = $_SESSION['id_user'];
  $preLogin = '';
  $disabled = '';
}else{
  $id_user = 0;
  $preLogin = 'preLogin';
  $disabled = 'display:none;';
}


$qry_Usuario = "select nu_perfil_usuario from Usuarios where id_user = $id_user";


$result_qry_Usuario = mysqli_query($conexao, $qry_Usuario);

$row = mysqli_fetch_array($result_qry_Usuario);

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$urlPage = "https://";   
else  
$urlPage = "http://";   
// Append the host(domain name, ip) to the URL.   
$urlPage.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL 

  $urlPage.= $_SERVER['REQUEST_URI'];


$urlStatic = "https://doguinhofeliz.mytcc.com.br/index.php";

$parseUrl = substr($urlPage, strrpos($urlPage, "/")+1);







 if(strpos($urlPage, 'index') !== false){
    $url = 'index.php';
  }elseif(strpos($urlPage, 'index') !== true){
    //$url = 'index.php'.'?id_user='.$id_user;
    $url = strstr($urlStatic, $parseUrl, true) .'index.php';
    
  }

  if(strpos($urlPage, 'produtos') !== false){
    $urlP = 'abaProdutos/produtos.php';
  }elseif(strpos($urlPage, 'produtos') !== true){
    $urlP = strstr($urlStatic, $parseUrl, true).'abaProdutos/produtos.php';
  }

  if(isset($_SESSION['id_user']) != ''){
    $login = $url. '#home';
  }else{
    $login = 'login.php';
    }

      

?>


<head>
  <meta name="viewport" content="width=device-width, initial-scale=0.75">
  <link rel="icon" href="/Foto/paw-solid.svg">
  <link href="/styles/style.css" rel="stylesheet" type="text/css"/>

  <?php require_once('links.php')?>

  <link href="/styles/style-topmenu.css" rel="stylesheet" type="text/css"/>


</head>

    <header class="header headerTOPMENU" id="header">
        <div class="nav-bar fixed-top" id="btnTop" style="display:none"></div>

          <nav class="navbar-nav nav" id="nav">
                <div class="nav__contentTCC bd-gridTCC">

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation" id="buttonClose" style="display: none;">
                    <ion-icon name="close-outline" class="nav__closeTCC" id="nav-closeTCC" style="font-size: 1.5rem;"></ion-icon>
              </button>
              
              


    <!---<img src="https://i.ibb.co/LgZS491/a0c21979-c7c6-43b5-8595-3082450516dd.jpg" alt="a0c21979-c7c6-43b5-8595-3082450516dd" border="0"></a>--->
            <!-- menu -->

    <div class="nav__menuTCC col-md-12" style="padding-bottom: 0.3rem;">

        <div class="nav__perfilTCC col-md-1">
          <div class="nav__imgTCC">
            <a class="logo" href="<?php print $url;?>#home" ><img src="Foto/dog-paw.svg" alt=""><!--Doguinho<span>Feliz</span>--></a>
          </div>
        </div>
        <div class="col-md-1"></div>

                <ul class="nav__listTCC col-md-10 p-0">
                  <li class="nav__itemTCC">
                    <a class="nav__linkTCC" href="<?php print $url;?>#home" onclick="">
                      <span class="icon">
                          <ion-icon name="home-outline"></ion-icon>
                      </span>
                      &nbsp;Inicio
                    </a>
                  </li>
                  <li class="dropdown nav__itemTCC">
                    <a class="nav__linkTCC dropdown-toggle" data-bs-toggle="dropdown" href="<?php print $url;?>#services" onclick="">
                      <span class="icon">
                          <ion-icon name="browsers-outline"></ion-icon>
                      </span>
                      &nbsp;Serviços
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php print $url;?>#services">Serviços</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="<?php print $urlP;?>">Todos nossos serviços</a>
                    </div>
                  </li>

               <li class="dropdown nav__itemTCC">
                    <a class="nav__linkTCC dropdown-toggle" data-bs-toggle="dropdown" href="<?php print $url;?>#Products" onclick="">
                      <span class="icon"><ion-icon name="basket-outline"></ion-icon></span>&nbsp;Produtos
                    </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php print $url;?>#Products">Produtos</a>
                  <hr class="dropdown-divider">
                    <a class="dropdown-item" href="<?php print $urlP;?>">Todos nossos produtos</a>
                  </div>
                </li>

                <li class="nav__itemTCC">
                  <a class="nav__linkTCC" href="<?php print $url;?>#about" onclick="">
                    <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>&nbsp;Sobre
                  </a>
                </li>

                <li class="nav__itemTCC">
                  <a class="nav__linkTCC" href="<?php print $url;?>#contact" onclick="">
                    <span class="icon"><ion-icon name="headset-outline"></ion-icon></span>&nbsp;Contato
                  </a>
                </li>
                <li class="nav__itemTCC"></li>
                <div class="col-md-1"></div>


                
              <?php        

              $query_cart = "SELECT * FROM Carrinho
              INNER JOIN Produtos
              ON Carrinho.id_Prod = Produtos.id_Prod where Carrinho.usuario='{$id_user}'";

              $results = mysqli_query($conexao, $query_cart);

              ?>
                
                <li class="nav__itemTCC">
                <div class="nav__socialTCC mb-0 d-flex">
                  <div id="dropSec" style="display:none">
                      <a class="nav__socialTCC-icon security-icon dropdown-toggle" href="#void" data-bs-toggle="dropdown"> 
                          <i class="bi bi-gear"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" style="right: -10rem!important">
                          <a class="dropdown-item" href="/seguranca/cadastraUsuario.php">Inserir Usuario</a>
                        <hr class="dropdown-divider">
                          <a class="dropdown-item" href="/seguranca/abaCadastroProd.php">Cadastro de Produtos</a>
                        <hr class="dropdown-divider">
                          <a class="dropdown-item" href="CockpitUsuarios/CockpitUsuarios.php">Usuarios na plataforma</a>
                      </div>
                  </div>

                      <a class="nav__socialTCC-icon <?php echo $preLogin;?>" href="javascript:void(0);"> <ion-icon name="person-outline"></ion-icon></a>
                      <!-- <div id="cart" class="cart" data-totalitems="0">
                          <a class="nav__socialTCC-icon" href="#void"><ion-icon name="cart-outline"></ion-icon></a>
                      </div> -->
                      <div <?php if($preLogin == ''){ ?>id="cart_icon" <?php }?>class="cart_icon <?php echo $preLogin;?>" data-totalitems="">
                        <a class="nav-link waves-effect nav__socialTCC-icon" href="javascript:void(0);">
                          <ion-icon name="cart-outline"></ion-icon>
                        </a>
                      </div>
                      
                      <a class="nav__socialTCC-icon" onclick="irParaLogoff()" href="javascript:void(0);"><ion-icon name="exit-outline"></ion-icon></a>

                      <div class="pull-right" id="socialTop" style="display:none">
                          <a class="nav__socialTCC-icon" href="https://instagram.com/doguinhofeliztcc?igshid=YmMyMTA2M2Y=" target="_blank">
                          <ion-icon name="logo-instagram"></ion-icon>
                          </a>
                          <a class="nav__socialTCC-icon" href="https://www.facebook.com/Doguinho-Feliz-104282872215806/" target="_blank">
                              <ion-icon name="logo-facebook"></ion-icon>
                          </a>
                          <a class="nav__socialTCC-icon" href="https://youtube.com/channel/UCWxvwfQrZeyotEqPi9tKD_g" target="_blank">
                              <ion-icon name="logo-youtube"></ion-icon>
                          </a>
                      </div>
                  </div>
                  </div>
                </li>
                


              </ul>
        
<!---
              <div class="col-md-3">
                    <div class="nav__socialTCC mb-0 d-flex">

                        <div id="dropSec" style="display:none">
                            <a class="nav__socialTCC-icon security-icon dropdown-toggle" href="#void" data-bs-toggle="dropdown"> 
                                <i class="bi bi-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="right: -10rem!important">
                                <a class="dropdown-item" href="/seguranca/cadastraUsuario.php">Inserir Usuario</a>
                              <hr class="dropdown-divider">
                                <a class="dropdown-item" href="/seguranca/abaCadastroProd.php">Cadastro de Produtos</a>
                              <hr class="dropdown-divider">
                                <a class="dropdown-item" href="CockpitUsuarios/CockpitUsuarios.php">Usuarios na plataforma</a>
                            </div>
                        </div>

                            <a class="nav__socialTCC-icon <?php //echo $preLogin;?>" href="javascript:void(0);"> <ion-icon name="person-outline"></ion-icon></a>
                            <<div id="cart" class="cart" data-totalitems="0">
                                <a class="nav__socialTCC-icon" href="#void"><ion-icon name="cart-outline"></ion-icon></a>
                            </div> 
                            <div <?php //if($preLogin == ''){ ?>id="cart_icon" <?php // }?>class="cart_icon <?php // echo $preLogin;?>" data-totalitems="">
                              <a class="nav-link waves-effect nav__socialTCC-icon" href="javascript:void(0);">
                                <ion-icon name="cart-outline"></ion-icon>
                              </a>
                            </div>
                            
                            <a class="nav__socialTCC-icon" onclick="irParaLogoff()" href="javascript:void(0);"><ion-icon name="exit-outline"></ion-icon></a>

                            <div class="pull-right" id="socialTop" style="display:none">
                                <a class="nav__socialTCC-icon" href="https://instagram.com/doguinhofeliztcc?igshid=YmMyMTA2M2Y=" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                                <a class="nav__socialTCC-icon" href="https://www.facebook.com/Doguinho-Feliz-104282872215806/" target="_blank">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                                <a class="nav__socialTCC-icon" href="https://youtube.com/channel/UCWxvwfQrZeyotEqPi9tKD_g" target="_blank">
                                    <ion-icon name="logo-youtube"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>

                    </div>--->
            
        
    
            <div class="shopping-cart" id="retornoCart">
              <div class="shopping-cart-header">
              <i class="fa fa-shopping-cart cart-icon"></i><span id="cart2" class="badge"></span>
                <div class="shopping-cart-total">
                  <span class="lighter-text">Total:</span>
                  <span class="main-color-text" id="total">R$</span>
                </div>
              </div> <!--end shopping-cart-header -->

    <!-- <ul class="shopping-cart-items">
          <li class="clearfix">
              <img src="" alt="item1" />
              <span class="item-name"></span>
              <span class="item-price"></span>
              <span class="item-quantity">Quantity:</span>
            </li>
    </ul> -->
      <?php

        $total = 0;

        $quantity = 0;
        $quantity = 0;

      if(isset($results)){
        while($row2 = mysqli_fetch_assoc($results)){

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
                  <span class="item-quantity"><?php echo $row2['quantidade'];?></span>
                  </div>
                  </div>
                </div>

            <?php }}; ?>
    

                <a href="/abaProdutos/index.php" class="button">Checkout</a>
            </div> <!--end shopping-cart -->
        </div>
    </nav>


    

      <div style="background-color: var(--base-color); color:white;padding: 0.5rem;display: flex;align-items: center;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu-outline" style="font-size:2.2rem;" class="headerTOPMENU__toggle" id="nav-toggleTCC"></ion-icon>
          </button>

          <font color="white" style="font-size:1rem;margin-left: 0px;text-align: center">
            <span style="margin-right: 5px">
               <?php    
             $hora = date('H:i');

             if($hora >= 6 and $hora <= 11){
                 echo "Bom dia!";
             }elseif($hora >= 12 and $hora <= 17){
                echo "Boa tarde!";
            }else{
                 echo "Boa Noite!";
             }
            ?>
           Bem vindo ao DoguinhoFeliz</span>
         </font>
      </div>
      
<template id="my-template">
    <swal-title>
      Você não esta logado na plataforma. <br><br>Deseja prosseguir para o LogIn ou Cadastro?
    </swal-title>
    <swal-icon type="warning" color="red"></swal-icon>
    <swal-button type="confirm" color="#6AB99D">
      Prosseguir para o LogIn
    </swal-button>
    <swal-button type="cancel">
      Cancelar
    </swal-button>
    <swal-button type="deny">
      Prosseguir para o Cadastro
    </swal-button>
    <swal-param name="allowEscapeKey" value="true" />
    <swal-param name="allowOutsideClick" value="false" />
    
    <swal-param
      name="customClass"
      value='{ "popup": "my-popup" }' />
</template>

      <!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

        <p>Do you want to receive the push notification about the newest posts?</p>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="https://mdbootstrap.com/docs/standard/pro/" class="btn btn-info">Yes</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->

</header>

<script>
        document.getElementById('total').innerHTML="R$ " + <?php echo $total;?>;
        document.getElementById('cart_icon').setAttribute('data-totalitems',<?php echo $quantity;?>);
        document.getElementById('cart2').innerHTML=<?php echo $quantity;?>
    </script>

<script>
  function addToCart(campo,id_prod,tipo){
    var button = $(campo);
    var cart = $('.cart_icon');
    var cartTotal = cart.attr('data-totalitems');
    var newCartTotal = parseInt(cartTotal) + 1;

    $.ajax({
        url:`ajax/ajaxInsereCart.php?id_prod=${id_prod}&quantity=1&tipo=${tipo}`,
        method:"post",
        contentType: false,
        processData: false,
        beforeSend:function(){
            
        },
        success: function(retorno){
          attCart();
          if(tipo == 'compra'){
            setTimeout(function(){
            const center = Swal.mixin({
              position: 'center',
              showConfirmButton: false,
              timer: 2000,
              timerProgressBar: true,
              didOpen: (alert) => {
                alert.addEventListener('mouseenter', Swal.stopTimer)
                alert.addEventListener('mouseleave', Swal.resumeTimer)
              },

              willClose: (alert) => {
              setTimeout(function(){
                window.location.href='/abaProdutos/'
              },200); 	
            },
            })
            center.fire({
              icon: 'success',
              title: 'Produto Adicionado com sucesso!',
              text: 'Você sera redirecionado para prosseguir com o pedido.',
            })
          },1000)
            
          }else{
            setTimeout(function(){Swal.fire({
              icon: 'success',
              title: 'Produto adicionado com sucesso!',
              text: 'Foi adicionado um item deste produto em seu carrinho.',
              showConfirmButton: false,
              timer: 2000,
            });
            },500)
          }
        },
        error: function(retorno){
            
        }
    });

    button.addClass('sendtocart');
    setTimeout(function(){
      button.removeClass('sendtocart');
      // cart.addClass('shake').attr('data-totalitems', newCartTotal);
      setTimeout(function(){
        cart.removeClass('shake');
        // document.getElementById('cart2').innerText = newCartTotal
      },500)
    },1000)
}

function attCart(){
    $.ajax({
        url:"ajax/novoCart.php",
        method:"get",
        contentType: false,
        processData: false,
        success: function(retorno){
          $('#retornoCart').html(retorno);
        },
        error: function(retorno){
            
        }
    });
}
</script>


<?php
if($row['nu_perfil_usuario'] == 1){ ?>
<script>
  document.getElementById('dropSec').style.display='block';
</script>
<?php }else{
 
}
?>



<script>
(function(){
 
 $("#cart_icon").on("click", function() {
   $(".shopping-cart").fadeToggle( "fast");
 });
 
})();
</script>
      


<script>
    function irParaLogoff(){
        window.location.href='logoff.php';
    }
</script>

<script>

/*===== MENU SHOW Y HIDDEN =====*/

// if(.classList.contains(className))

const navMenu = document.getElementById('nav');
 const toggleMenu = document.getElementById('nav-toggleTCC');
 const closeMenu = document.getElementById('buttonClose');
 

  /*SHOW*/
  toggleMenu.addEventListener('click', ()=>{
    navMenu.classList.toggle('show');
    closeMenu.style.display="block";
  });

  /*HIDDEN*/
  closeMenu.addEventListener('click', ()=>{
    navMenu.classList.remove('show');
  });

  /*===== ACTIVE AND REMOVE MENU =====*/
   const navLink = document.querySelectorAll('.dropdown-item');

   function linkAction(){
   /*Active link*/
   navLink.forEach(n => n.classList.remove('active'));
   this.classList.add('active');

   /*Remove menu mobile*/
   navMenu.classList.remove('show')
   }
   navLink.forEach(n => n.addEventListener('click', linkAction));

// function toggleMenu(){
  
//   let btnMobile = document.querySelector('btn-mobile');
//   let nav = document.querySelector('nav'); 
//   let icon = document.getElementById('icon-fa');
//   nav.classList.toggle('show');
//   icon.classList.toggle('fa-2x');

// }
</script>








