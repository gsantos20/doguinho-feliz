<?php
session_start();
include('conexao.php');
//error_reporting(E_ALL);
//ini_set('display_errors', '1');


//  if($_SESSION['username'] == null or $_SESSION['username'] == ''){
//      header('Location: login.php');
//     exit();
//  }
?>

<script>
        setTimeout(function(){ if(top[1] == undefined){window.location.assign='MasterFrameSet.php'} }, 50);
        setInterval(function(){ if(top[1] == undefined){window.location.assign='MasterFrameSet.php'} }, 1000);

        if (parent.location.href != self.location.href) {
          document.querySelector('html').style.zoom="0.9"
      }
</script> 


<!DOCTYPE html>
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <link rel="icon" href="/Foto/paw-solid.svg">
    <link href="/styles/style.css" rel="stylesheet" type="text/css"/>
    
    
    <?php include_once('links.php')?>


  <body>

  <?php 
    include_once('topmenu2.php');
?>

      

    <main>
      <!-- HOME -->
      <section class="section" id="home">
       <div class="container grid">
          <div class="image">
            <img src="Foto/banho-de-gato-procao-1000x500.jpg" alt="Mulher sorrindo penteando outra mulher">
          </div>
          <div class="text">
            <h2 class="title" id="NotHaveYet">Mais saúde e <span>atenção</span>para o seu pet</h2>
            <p id="NoHaveYet">Saúde natural para os seu filhote</p>
            <a class="button" href="#" onclick="NotHaveYet(), NoHaveYet()">Agendar um horário</a>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <div class="divider-2"></div>

      <!-- SERVICES -->
      
      <section class="section" id="services">
        <div class="container grid" style="margin-top: -35px;">
        <header >
            <h2 class="title" >Serviços</h2>
            <p class="subtitle">
              O <strong>Doguinho Feliz</strong> já conquistou clientes de inúmeros locais com seus tratamentos exclusivos e totalmente especializado.
            </p>
          </header>
          
          
          <div class="cards grid">
            <div class="card">
              <i class="icon-trim"></i>
              <h3 class="title">Banho & Tosa</h3>
              <p>
                O banho & tosa é para o seu animalzinho voltar cheiroso e bonito para a sua casa !
              </p>
            </div>
           

            <div class="card">
              <i class="icon-cosmetic"></i>

              <h3 class="title">Produtos</h3>
              <p>
                Aqui você poderá encontrar produtos para cuidados e alimentação do seu pet
              </p>
            </div>

            <div class="card">
            <i class="fa fa-dog"></i>
              <h3 class="title">Tratamentos</h3>
              <p>
                Os nossos tratamentos são especializados para deixar o seu pet confortavél e se sentir como um rei ou rainha
              </p>
            </div>
            
          </div>
        </div>
        
      </section>

      <div class="divider-1"></div>

      <div class="divider-2"></div>

      <?php

      $queryBuscaProd = "select * from Produtos ORDER BY RAND() limit 6";

      $result_queryBuscaProd = mysqli_query($conexao, $queryBuscaProd);

    ?>
      <section class="section" id="Products">
        <div class="container" style="margin-top: -35px;">
          <header>
            <h2 class="title">Nossos principais produtos:</h2>
          </header>
          <div class="swiper">
            <div class="swiper-wrapper">
              
        <?php while($row = $result_queryBuscaProd->fetch_assoc()){
          ?>
              <div class="swiper-slide">
                <blockquote>
                  <a href="abaProdutos/abaProduto.php?id_prod=<?php echo $row['id_prod'];?>">
                    <img src="<?php echo $row['caminho'];?>" class="img-fluid">
                  </a>
                  <cite> <b><?php echo $row['nome_prod'];?></b></cite>
                  <br>
                  <cite><b>R$ <?php echo $row['preco']?></b></cite>
                </blockquote>
              </div>
          <?php }
            ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>
      <!-- ABOUT -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img src="Foto/como-tosar-cachorro-em-casa.jpg" alt="3 mulheres sorrindo">
          </div>
          <div class="text">
            <h2 class="title">Sobre nós</h2>
            <p>
              O <strong>Doguinho Feliz</strong> é uma empresa criada com intenção de cuidar de seu pet da melhor forma possível, com os melhores profissionais especializados nesta área
            </p>
            <br />
            <p>
              Com todo cuidado necessário, desenvolvemos técnicas inovadoras e exclusivas, para dar ao máximo de conforto possível para o seu pet, fazendo o se sentir como um rei ou rainha
            </p>
            <br />
            <p></p>
          </div>
        </div>
      </section>
      <!-- CONTACT -->
      <div class="divider-2"></div>
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com o DoguinhoFeliz, queremos tirar suas dúvidas, ouvir suas críticas e sugestões.
            </p>
            <a href="https://api.whatsapp.com/send?phone=+5511998456754&text=Oi! Gostaria de agendar um horário" class="button" target="_blank">
              <i class="icon-whatsapp"></i> Entrar em contato
            </a>
          </div>

          <div class="links">
            <ul class="grid">
              <li>
              <i class="fa-regular fa-clock"></i>08:00 as 18:00 &nbsp;&nbsp;
              </li>


              <li>
                <i class="icon-phone"></i> 11 99845-6754&nbsp;&nbsp;
                <i class="icon-whatsapp"></i>
              </li>
              <li><i class="icon-map-pin"></i> Av. Alphaville, Nº 580 - Alphaville, Barueri - SP , 06472-010</li>
              <li><i class="icon-mail"></i> contato@doguinhofeliz.com.br</li>
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>
      
    </main>

        <?php include 'footer.php';?>
    

  </body>
  <a href="<?php print $url;?>#home" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>

  <script src="js/produto.js" type="text/javascript"></script>
</html
