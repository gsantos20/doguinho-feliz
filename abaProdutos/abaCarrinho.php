
<!-- <link rel='stylesheet' id='photoswipe-default-skin-css'  href='https://elegantthemesexamples.com/cart-and-checkout/two/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css?ver=6.5.1' type='text/css' media='all' /> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   <?php include_once('../links.php');?>
<?php
$id_user = $_SESSION['id_user'];

$query_cart = "SELECT * FROM Carrinho
INNER JOIN Produtos
ON Carrinho.id_prod = Produtos.id_prod where usuario='{$id_user}'";

$results_prod = mysqli_query($conexao, $query_cart);


?>


<body class="home page-template-default page page-id-8 theme-Divi et-tb-has-template et-tb-has-header et-tb-header-disabled et-tb-has-footer et-tb-footer-disabled woocommerce-cart woocommerce-page woocommerce-no-js et_pb_button_helper_class et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db woocommerce">
<input type="hidden" id="hdnTotalCart" name="hdnTotalCart" value="0">
   <div id="page-container">

	<div id="et-boc" class="et-boc">
<div id="et-main-area">

<div id="main-content">   
<article id="post-8" class="post-8 page type-page status-publish hentry">
<div class="entry-content">
<div class="et-l et-l--post">
<div class="et_builder_inner_content et_pb_gutters3 product">
   
<div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular" >
   <div class="et_pb_module et_pb_post_title et_pb_post_title_0 et_pb_bg_layout_dark  et_pb_text_align_center"   >
      <div class="et_pb_title_container">
         <h1 class="entry-title">Cart</h1>
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
         <div onclick="window.location.href='abaProdutos/produtos.php'" class="et_pb_module et_pb_blurb et_pb_blurb_0 et_clickable  et_pb_text_align_left et_pb_text_align_center-tablet  et_pb_blurb_position_top et_pb_bg_layout_light">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
            <div class="et_pb_blurb_content">
               <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle">
				<lord-icon src="https://cdn.lordicon.com/webtefou.json" trigger="loop" delay="1000" style="width:40px;height:40px"></lord-icon>
			</span></span>
      </div>
               <div class="et_pb_blurb_container">
                  <h4 class="et_pb_module_header"><span>Shop</span></h4>
               </div>
            </div>
         </div>
         <div  class="et_pb_module et_pb_blurb et_pb_blurb_1  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
            <div class="et_pb_blurb_content">
               <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle">
				<lord-icon src="https://cdn.lordicon.com/aoggitwj.json" trigger="loop" delay="1000" style="width: 70px;height: 70px;"></lord-icon>
			</span></span></div>
               <div class="et_pb_blurb_container">
                  <h4 class="et_pb_module_header"><span>Review</span></h4>
               </div>
            </div>
         </div>
         <div onclick="MudaFrame('P')" class="et_pb_module et_pb_blurb et_pb_blurb_2 et_clickable  et_pb_text_align_right et_pb_text_align_center-tablet  et_pb_blurb_position_top et_pb_bg_layout_light">
            <div class="et_pb_blurb_content">
              <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle">
			  	<lord-icon src="https://cdn.lordicon.com/zwhkzizg.json" trigger="hover"style="width:40px;height:40px"></lord-icon></span></span></div>
               <div class="et_pb_blurb_container">
                  <h4 class="et_pb_module_header"><span>Checkout</span></h4>
               </div>
               
            </div>
         </div>
      </div>
   </div>
   <div class="et_pb_row et_pb_row_2">
      <div class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
         <div class="et_pb_module et_pb_wc_cart_notice et_pb_wc_cart_notice_0 woocommerce et_pb_fields_layout_default et_pb_bg_layout_  et_pb_text_align_left">
            <div class="et_pb_module_inner">
               <div class="woocommerce-notices-wrapper"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular" >
   <div class="et_pb_row et_pb_row_3 et_pb_gutters2">
      <div class="et_pb_column et_pb_column_2_3 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough">
         <div class="et_pb_with_border et_pb_module et_pb_wc_cart_products et_pb_wc_cart_products_0 woocommerce-cart woocommerce et_pb_woo_custom_button_icon et_pb_row_layout_default">
            <div class="et_pb_module_inner" id="retornoCarrinho">
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
                           while($row2 = $results_prod->fetch_assoc()){

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
                              <a href="abaProdutos/abaProduto.php?id_prod=<?php echo $id_prod;?>"><img width="100px" height="100px" src="<?php echo $row2['caminho']; ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" /></a>						
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
                  var totalCart = 0;

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
            </div>
         </div>
      </div>
      <div class="et_pb_column et_pb_column_1_3 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
         <div class="et_pb_with_border et_pb_module et_pb_wc_cart_totals et_pb_wc_cart_totals_0 woocommerce-cart et_pb_woo_custom_button_icon">
            <div class="et_pb_module_inner">
               <div class="cart_totals ">
                  <h2>Cart totals</h2>
                  <table cellspacing="0" class="shop_table shop_table_responsive">
                     <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount" id="txtCartSubtotal">
                           R$<?php echo $total;?></span>
                        </td>
                     </tr>
                     <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount" id="txtCartTotal">
                           R$<?php echo $total;?></strong></span>
                        </td>
                     </tr>
                  </table>
                     <button type="button" class="button" name="btnUpdateCart" onclick="MudaFrame('P');processCart();" value="">Ir para o Pagamento</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
			
								
				</article>
         </div>
		</div>
	</div>

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


      function mudaSubTotal(qtd,id_prod){
         let preco = document.getElementById('hdnPreco'+id_prod).value
         console.log(preco);
         let subTotal = parseFloat(preco)* parseInt(qtd.value);
         document.getElementById('txtSubtotal'+id_prod).innerHTML="R$"+subTotal.toFixed(2)
         document.getElementById('hdnSubTotal'+id_prod).value=subTotal.toFixed(2)
      mudaTotal();
      }
   </script>

   <script>
      function removeItemCart(id_prod){
         Swal.fire({
         title: 'Deseja remover este item ?',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Sim, remover!',
         cancelButtonText: 'Cancelar'
         }).then((result) => {
         if (result.isConfirmed) {
            $.ajax({
               url:"../ajax/ajaxDeletaItem.php?id_prod="+id_prod+"&aba=cart",
               method:"post",
               contentType: false,
               processData: false,
               beforeSend:function(){
                     
               },
               success: function(retorno){
                  $('#retornoCarrinho').html(retorno);
                  attCart();
                  mudaTotal();
                  Swal.fire({
                     icon: 'success',
                     title: 'Produto removido!',
                     text: 'Produto removido com sucesso de seu carrinho.',
                     showConfirmButton: false,
                     timer: 2000,
                  })
               },
               error: function(retorno){
                     alert('Não foi possivel remover este item do carrinho');
               }
            });
          }
         })
      }

      function processCart(){
         var formdata = new FormData($("form[name='formCheckout']")[0]);

         $.ajax({
               url:"../ajax/ajaxProcessCart.php",
               data: formdata,
			      type: "post",
               contentType: false,
               processData: false,
               beforeSend:function(){
               },
               success: function(retorno){
                  attCart();
               },
               error: function(retorno){
               }
            });
      }

      function applyCupom(){
        let Cupom = document.getElementById('txtCupom').value
        let msg = ''
        

        if(document.getElementById('cupomDesconto') == undefined && Cupom.toUpperCase() == 'DOG10'){
         $('.cart-subtotal').after($(`<tr>
                        <th>Cupom</th>
                           <td data-title="Subtotal"><span class="woocommerce-Price-amount amount" id="cupomDesconto">- 10%</span>
                        </td>
                     </tr>`));
         percent = parseInt(document.getElementById('txtCartTotal').innerText.replace( 'R$', '')) * 10/100
         totalCart = parseInt(document.getElementById('txtCartTotal').innerText.replace( 'R$', '')) - percent
         document.getElementById('txtCartTotal').innerText="R$"+totalCart;
        }else if(Cupom.toUpperCase() != 'DOG10'){
         alert('Cupom Invalido, tente com outro');
        }else{
         alert('Cupom já aplicado no pedido!');
        }
      }
   </script>

   <script>
      mudaTotal()
   </script>