<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
        <link rel="icon" href="/Foto/paw-solid.svg">
        <link rel="stylesheet" href="../styles/products.css">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>	
        <link rel="stylesheet" type="text/css" href="Assets/animate.min.css">
        <link rel="stylesheet" href="Assets/owl.carousel.min.css">
        <link rel="stylesheet" href="Assets/magnific-popup.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="Assets/jquery.min.js.download"></script>

<style>
section.bolos {
  padding: 20px 0;
  min-height: 100vh;
}
.filtroIngrediente {
  background-color: #71ADA5;
  padding: 15px 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  color: #e9e7f9;
}
.filtroIngrediente p {
  margin-bottom: 0;
  margin-right: 15px;
}
.filtroIngrediente select.filtroProdutosTodos {
  height: 25px;
  border: none;
  border-radius: 10px;
  padding: 0 15px;
  color: #482316;
  outline: none;
}

@media screen and (max-width: 767px) {
  .filtroIngrediente {
    flex-direction: column;
  }
  .filtroIngrediente select.filtroProdutosTodos {
    margin-top: 10px;
  }
}


</style>
  </head>
  <body>
  <?php
    session_start();
    //   error_reporting(E_ALL);
    //   ini_set('display_errors', 1);
    include_once('../topmenu2.php');

    $query = "select * from Produtos";
    $results = mysqli_query($conexao, $query);

    $queryFiltro = "select categoria from Produtos group by categoria";
    $results_filtro = mysqli_query($conexao, $queryFiltro);

    function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
    
  ?>
<section class="produtos" style="opacity: 1;padding: 20px 0;min-height: 100vh;">
    <div class="container">
        <!---
            <div class="row">
                <div class="col-md-12">
                    <div class="filtroIngrediente">
                        <p>Escolha sua plataforma:</p>
                        <select name="filtro" id="filtroProdutosTodos" class="filtroProdutosTodos" style="display: block;">
                            <option value=".todasplataformas">Todas</option>
                        <?php while($row = $results_filtro->fetch_assoc()){ ?>
                            <option value=".<?php echo tirarAcentos(strtolower($row['categoria'])); ?>"><?php echo $row['categoria']; ?></option>
                        <?php }; ?>
                        </select>
                    </div>
                    <br>
                </div>
                        --->
        <div class="products" style="zoom: 0.9;">
            <h1 style="text-align: center;color: black">Produtos Disponiveis</h1>
            <br>
            <div class="container">
                <div class = "product-items" style="width: 100%!important;">
                    <!-- single product -->
                    <?php while($row2 = $results->fetch_assoc()){ ?>
                    <div class="product todosprodutos-lista .<?php echo tirarAcentos(strtolower($row2['categoria'])); ?>">
                        <div class = "product-content">
                                <div class = "product-img">
                                    <a href="abaProdutos/abaProduto.php?id_prod=<?php print $row2['id_prod'];?>">
                                        <img src="<?php print $row2['caminho'];?>" alt = "product image">
                                    </a>
                                </div>
                            <div class = "product-btns">
                                <div class="page-wrapper">
                                <?php if(isset($_SESSION['id_user']) != ''){ ?>
                                    <button type="button" class="btn-cart" onclick="addToCart(this,<?php print $row2['id_prod'];?>);" id="addtocart<?php print $row2['id_prod'];?>"> Carrinho
                                        <span class="cart-item"></span><span><i class = "fas fa-plus"></i></span>
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn-buy" onclick="window.location.href='abaProdutos/abaProduto.php?id_prod=<?php print $row2['id_prod'];?>'"> Comprar
                                        <span><i class = "fas fa-shopping-cart"></i></span>
                                    </button>
                                <?php }else{ ?>
                                    <button type="button" class="btn-cart preLogin" id="addtocartN<?php print $row2['id_prod'];?>"> Carrinho
                                        <span class="cart-item"></span><span><i class = "fas fa-plus"></i></span>
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn-buy preLogin"> Comprar
                                        <span><i class = "fas fa-shopping-cart"></i></span>
                                    </button>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-info-top">
                                <h2 class="sm-title"><?php echo $row2['class_prod'];?></h2>
                                <div class="rating">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name"><?php echo strtoupper($row2['nome_prod']);?></a>
                                <?php
                                    $preco = floatval($row2['preco']);
                                    $precoDesc = (25 / 100) * $preco + $preco; 
                                ?>
                            <p class = "product-priceC">R$ <?php echo $precoDesc?></p>
                            <p class = "product-price">R$ <?php echo $preco;?></p>
                        </div>
                        <!-- <div class = "off-info">
                            <h2 class = "sm-title">25% off</h2>
                        </div> -->
                    </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script src="../Assets/prods.js"></script>

      <?php include('../footer.php')?>

  </body>

  <script>
/* ScrollReveal: Mostrar elementos quando der scroll na página */
const scrollReveal = ScrollReveal({
  origin: "top",
  distance: "15px",
  duration: 700,
  reset: true,
  viewOffset: {
    top: 100,
    bottom: 10,
  },
});

// scrollReveal.reveal('.product .product-info',
//   { interval: 100 }
// );

// $(".product-items .product *:contains("+value+")").parent().delay(100).hide()
</script>

    <script src="Assets/bootstrap.min.js.download" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="Assets/isotope.min.js.download"></script>
	<script src="Assets/2e3d535970.js"></script>
	<script src="Assets/jquery.magnific-popup.min.js.download"></script>
    
    


	<script>
		new WOW().init();
	</script>


</html>

