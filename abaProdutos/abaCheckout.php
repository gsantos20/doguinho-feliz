<?php
$id_user = $_SESSION['id_user'];

$query_cart = "SELECT * FROM Carrinho
INNER JOIN Produtos
ON Carrinho.id_prod = Produtos.id_prod where usuario='{$id_user}'";

$results_prod = mysqli_query($conexao, $query_cart);


?> 
   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <script type="text/javascript">
      document.documentElement.className = 'js';
   </script>
      <link rel="stylesheet" id="select2-css" href="https://elegantthemesexamples.com/cart-and-checkout/two/wp-content/plugins/woocommerce/assets/css/select2.css?ver=6.7.0" type="text/css" media="all">
   <!-- <link rel="stylesheet" id="woocommerce-layout-css" href="https://elegantthemesexamples.com/cart-and-checkout/two/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=6.7.0" type="text/css" media="all">
   <link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://elegantthemesexamples.com/cart-and-checkout/two/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.7.0" type="text/css" media="only screen and (max-width: 768px)">
   <link rel="stylesheet" id="woocommerce-general-css" href="https://elegantthemesexamples.com/cart-and-checkout/two/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=6.7.0" type="text/css" media="all"> -->
    <!-- <link href="../Assets/css/productsCSS2.css" rel="stylesheet" type="text/css"/> -->

<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

<style>
   .card-header{
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    top: 0;
    position: absolute;
    width: 100%;
    left: 0%;
   }
   h1{
      margin-top: 0.5rem!important;
      margin-bottom: 0.5rem!important;
   }
    .form-label{
        float: left;
    }
    .card-body{
      margin: 1rem -2rem;
    }
   .form-control{
      margin-bottom: 2%;
   }
   .card{
      padding: 2rem;
      box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
      border:none;
   }

   thead *{
      font-weight: 600;
   }

   tbody *{
   font-weight: 500;
    color: black;
   }
</style>


<body class="page-template-default page page-id-9 theme-Divi et-tb-has-template et-tb-has-header et-tb-header-disabled et-tb-has-footer et-tb-footer-disabled woocommerce-checkout woocommerce-page woocommerce-js et_pb_button_helper_class et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db woocommerce chrome">

<div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular" >
   <div class="et_pb_module et_pb_post_title et_pb_post_title_0 et_pb_bg_layout_dark et_pb_text_align_center et_dark">
   <div class="et_pb_row et_pb_row_0">
      <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
         <div class="et_pb_module et_pb_post_title et_pb_post_title_0 et_pb_bg_layout_light  et_pb_text_align_center">
            <div class="et_pb_title_container">
               <h1 class="entry-title">Checkout</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="et_pb_row et_pb_row_1 et_pb_equal_columns">
    
      <div class="et_pb_with_border et_pb_column_4_4 et_pb_column et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
         <div class="et_pb_module et_pb_divider et_pb_divider_0 et_pb_divider_position_ et_pb_space">
            <div class="et_pb_divider_internal"></div>
         </div>
         <div class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_ et_pb_space">
            <div class="et_pb_divider_internal"></div>
         </div>
         <div class="et_pb_module et_pb_blurb et_pb_blurb_0 et_clickable  et_pb_text_align_left et_pb_text_align_center-tablet  et_pb_blurb_position_top et_pb_bg_layout_light">
            <div class="et_pb_blurb_content">
               <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-animated">
                <lord-icon src="https://cdn.lordicon.com/webtefou.json" trigger="loop" delay="1000" style="width:40px;height:40px"></lord-icon>
			</span></span></div>
               <div class="et_pb_blurb_container">
                  <h4 class="et_pb_module_header"><span>Shop</span></h4>
               </div>
            </div>
         </div>
         <div  class="et_pb_module et_pb_blurb et_pb_blurb_1 et_clickable  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_light">
            <div onclick="MudaFrame('C')" class="et_pb_blurb_content">
               <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-animated">
                <lord-icon src="https://cdn.lordicon.com/aoggitwj.json" trigger="loop" delay="1000" style="width: 40px;height: 40px;"></lord-icon>
			</span></span></div>
               <div class="et_pb_blurb_container">
                  <h4 class="et_pb_module_header"><span>Review</span></h4>
               </div>
            </div>
         </div>
         <div class="et_pb_module et_pb_blurb et_pb_blurb_2  et_pb_text_align_right  et_pb_blurb_position_top et_pb_bg_layout_dark">
            <div class="et_pb_blurb_content">
               <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-animated">
                <lord-icon src="https://cdn.lordicon.com/zwhkzizg.json" trigger="hover"style="width:70px;height:70px"></lord-icon></span></span>
            </div>
               <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><span>Checkout</span></h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   
   <div class="container-fluid" style="padding: 2rem;margin-top: -6rem;">
      <div class="row" style="justify-content: space-evenly;">
      <div class="col-md-4" style="padding-bottom: 1rem;">
         <div class="card" style="width:auto;border-color: #ddd;">
               <div class="card-header" style="background-color: #71ADA5;">
                  <h5 >Detalhes do Pagamento</h5>
               </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <label for="txtFirstName" class="form-label">Primeiro Nome : <span style="color: #e11b22;"> * </span></label>
                     <input type="text" class="form-control" name="txtFirstName" id="txtFirstName" maxlength="18">
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="txtLastName">Ultimo Nome: </label>
                     <input type="text" class="form-control" id="txtLastName" name="txtLastName">
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-6">
                     <label class="form-label" for="txtCPF">CPF: </label>
                     <input type="text" class="form-control" id="txtCPF" name="txtCPF">
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="txtTelefone">Telefone: </label>
                     <input type="text" class="form-control" id="txtTelefone" name="txtTelefone">
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-4">
                     <label class="form-label" for="txtCEP">CEP: </label>
                     <input type="text" class="form-control" id="txtCEP" name="txtCEP">
                  </div>

                  <div class="col-md-8">
                     <label class="form-label" for="txtEndereco">Endereço: </label>
                     <input type="text" class="form-control" id="txtEndereco" name="txtEndereco">
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-4">
                     <label class="form-label" for="txtNumResid">Numero: </label>
                     <input type="text" class="form-control" id="txtNumResid" name="txtNumResid">
                  </div>

                  <div class="col-md-8">
                     <label class="form-label" for="txtComplementoRef">Complemento: </label>
                     <input type="text" class="form-control" id="txtComplementoRef" name="txtComplementoRef">
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                        <label class="form-label" for="txtEmail">Numero: </label>
                        <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
         
         <div class="col-md-4" style="padding-bottom: 1rem;">
   <div class="card" style="width:auto;border-color: #ddd;">
         <div class="card-header" style="background-color: #71ADA5;">
         <h5 >Detalhes do Pagamento</h5>
      </div>
      
   <div class="card-body">
   <div class="row d-flex justify-content-center">
      <div class="col-md-12">
      <table class="table table-hover table-bordered results">
         <thead>
            <tr>
               <th class="col-md-5 col-xs-5" style="text-align:center"><b>Produto</b></th>
               <th class="col-md-2 col-xs-2" style="text-align:center"><b>SubTotal</b></th>
            </tr>
         </thead>
         <tbody>
         <?php
               while($row2 = $results_prod->fetch_assoc()){
                  $preco = number_format(str_replace(',','.',$row2['preco']), 2, '.', '');
                  $total = number_format(str_replace(',','.',$row2['total']), 2, '.', '');

                  $id_prod = $row2['id_prod'];
                  $rows []= array(
                     'id_prod' => $row2['id_prod'],
                  );         
            ?>
               <tr>
                  <td style="text-align:center"><?php echo $row2['nome_prod'];?> &nbsp;&nbsp; x&nbsp;&nbsp;<?php echo $row2['quantidade'];?></td>
                  <td style="text-align:center"><?php echo $row2['preco'];?></td>
               </tr>
               <?php } ?>
            </tbody>
            <tfoot>
               <tr>
                  <th class="col-md-5 col-xs-5" style="text-align:center;font-weight: bold;">Total</th>
                  <td class="col-md-2 col-xs-2 text-bold" style="text-align:center;font-weight: bold;"><?php echo $total;?></td>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>

      <div class="col-md-12">
            <label for="txtDescProd" class="form-label">Obseravações sobre o Pagamento :</label>
                  <textarea class="form-control" placeholder="Insira seu comentario aqui" id="txtDescProd" name="txtDescProd" style="height: 100px"></textarea>
         </div>
   </div>
   </div>
</div>

<div class="col-md-3" style="padding-bottom: 1rem;">
      <div class="card" style="width:auto;border-color: #ddd;">
         <div class="card-header" style="background-color: #71ADA5;">
            <h5>Tipo de Pagamento</h5>
         </div>
         
         <div class="card-body">
            <div class="col-md-12">
               <label for="txtProduto" class="form-label">Nome do Produto : <span style="color: #e11b22;"> * </span></label>
               <input type="text" class="form-control" name="txtProduto" id="txtProduto" maxlength="18">
            </div>

            <div class="col-md-12">
               <label class="form-label" for="txtLastName">Ultimo Nome: </label>
               <input type="text" class="form-control" id="txtLastName" name="txtLastName">
            </div>
         </div>
      </div>
      </div>
</div>
   
</div>
</div>