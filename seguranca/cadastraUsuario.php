<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  
<style>

	.form-control {
			margin: 0 0 15px;
			width: 150px;
		}

		.col-sm-4{
			padding: 0;
		}
		td{
			cursor: hand;
		}
		span {
			cursor: pointer !important;
		}

		.row {
			margin: 0 !important;
			padding: 2px;
		}

		input[type=text]{
			width: 100% !important;
		}
		.middle{
			text-align:middle !important;
		}
		.hr{
			border-bottom: 1px solid #ccc;
			margin: 10px 0;
			width: 100%;
		}
		

		.ui-datepicker {
			background: #fff;
			border: 1px solid #555;
			color: hsl(var(--hue) 36% 57%);
		}
		
		.ui-datepicker-header{
			border-color:var(--base-color);
			border:transparent ;
		}

		.ui-datepicker-days-cell-over{
			border-radius: 7.5px;
		}
		
		.ui-datepicker-month{
			margin-right: 15px!important;
			border-radius: 7.5px;
		}
		.ui-datepicker-year{
			border-radius: 7.5px;
		}

		.ui-state-highlight{
			color:black;
		}
		

</style>



</head>


		<?php include '../topmenu2.php';?>

			<br>
			<br>
			<br>
			<form name="cadUserform" id="cadUserform" method="POST" class="form-inline" autocomplete="off">
			<input type="hidden" id="hdnCad" name="hdnCad" value="0">
				<div class="container">
					<div class="panel panel-default">
						<div class="panel-heading"  style="background-color:hsl(var(--hue) 36% 57%);color:white;text-align:center;border-radius: 10px 10px 0 0;">
						<br>
						<h2>Cadastrar Usuário</h2>
						<br>
						</div>
						<div class="panel-body" style="background-color:#F7F7F7 !important;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding: 30px;border-radius: 0 0 10px 10px;">

							
							<div class="row" style="background-color:#F7F7F7 !important">

							<div class="form-group">
	                            <div class="col-sm-12">
	                                <div id="divMostraR"></div>
	                            </div>
	                        </div>
								<div class="col-md-4">
									<label for="txtFirstName" class="form-label">Nome:</label><span style="color:red">*</span>
									<input type="text" class="form-control" name="txtFirstName" id="txtFirstName" value=""/>
								</div>
								<div class="col-md-4">
									<label for="txtLastName" class="form-label">Sobrenome:</label>
									<input type="text" class="form-control" name="txtLastName" id="txtLastName" value=""/>
								</div>

								<div class="col-md-4">
									<label for="txtTelefone" class="form-label">Telefone:<span style="color:red">*</span></label>
									<input type="text" class="form-control telefone" name="txtTelefone" id="txtTelefone" value=""/>
								</div>



								</div>
									<div class="row">
										<div class="col-md-5">
											<label for="txtEmail" class="form-label">E-mail:</label><span style="color:red">*</span>
											<input type="text" class="form-control" onblur="ValidaEmail(this);" name="txtEmail" id="txtEmail" value=""/>
										</div>
										
										<div class="col-md-3">
											<label for="txtCpf" class="form-label">CPF:</label><span style="color:red">*</span>
											<input type="text" class="form-control"  name="txtCpf" id="txtCpf" value=""/>
										</div>

										<div class="col-md-4">
											<label for="slcTipoPerfil" class="form-label">Tipo de Perfil <span style="color:red">*</span>:</label>
											<select class="form-control" name="slcTipoPerfil" id="slcTipoPerfil">
												<option value="">Selecione  *</option>
												<option value="0">Cliente</option>
												<option value="1">Administrador</option>
											</select>
										</div>
									</div>

									<div class="row">

										<!-- <div class="col-md-6">
											<label for="txtDataNasc" class="form-label">Data de Nascimento<span style="color:red">*</span></label>
											<input type="date" class="form-control" name="txtDataNasc" id="txtDataNasc" value=""/>
										</div> -->
									</div>
							

									<div class="row">


									</div>
						
									<br>
									<div class="row">
										<div class="col-sm-12 col-sm-offset-1 pull-left">
										<div class="pull-left" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
											<input type="button" class=" btn btn-primary" style="background-color:hsl(var(--hue) 36% 57%);width: 165px !important;" value="Cadastrar" id="btnCadastrar" name="btnCadastrar" onclick="validaForm()"></input>
										</div>
									</div>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
			</form>
		
			<br>
			<br>
			<br>
			
            
        	<?php include '../footer.php';?>
		
	</body>

	    <!-- ✅ Load CSS file for jQuery ui  
		<link
      href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"
      rel="stylesheet"
    />-->
	✅ load jQuery ✅ 
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

	
    <!-- ✅ load jquery UI ✅ 
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
      integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
-->
<script>

function ValidaEmail(campo){
	var f = campo.value;
		if(f != '' && (f.indexOf("@") == -1 || f.indexOf(".") == -1)){
			window.alert('Email Inserido Invalido!');
			$(campo).val('');
			$(campo).focus();
		}

}
</script>


		<script>
	function validaForm(){

       var mensagem = ''; // cria uma variavel do tipo vazio
        if(document.getElementById('txtFirstName').value == ''){
            mensagem = mensagem+"\n- Nome ";
        }
        if(document.getElementById('txtLastName').value == ''){
            mensagem = mensagem+"\n- Sobrenome";
        }
        if(document.getElementById('txtCpf').value == ''){
            mensagem = mensagem+"\n- CPF";
        }
        if(document.getElementById('txtEmail').value == ''){
            mensagem = mensagem+"\n- Email";
        }
        if(document.getElementById('txtTelefone').value == ''){
            mensagem = mensagem+"\n- Telefone";
        }
        if(document.getElementById('slcTipoPerfil').value == ''){
            mensagem = mensagem+"\n- Tipo de Perfil de Usuario";
        }

       if(mensagem != ''){
           window.alert('== PARA PROSEGUIR, PREENCHA OS SEGUINTES CAMPOS! ==' +mensagem);
       }

        else if(mensagem == ''){
				var d2 = document.cadUserform;
				var s = '';
				var erro = false;

				if(erro){
					$('#divMostraR').html("<div class='alert alert-danger'>"+s+"</div>");
				}else{
					r = confirm('Você tem certeza que deseja finalizar o cadastro de um novo usuario?\n\nLembre de confirmar os dados antes de prosseguir.');
					if(r){
						$.ajax({
							url:"seguranca/cadastra.php",
							data:$('#cadUserform').serialize(),
							method:"get",
							dataType: "json",
							contentType: false,
							processData: false,
							beforeSend:function(){
								$('#divMostraR').html("<div class='alert alert-info'>Aguarde, Processando Dados...</div>");
							},
							success:function(retorno) {
								$('#divMostraR').html("<div "+retorno.cor+">"+retorno.msg+"<br><br> Senha de acesso: DOGF@2022 </div>");
							},
							error: function(retorno){
								$('#divMostraR').html(`<div class='alert alert-danger' style="text-align: center;">Atenção!<br> Ocorreu um erro, Usuario não cadastrado!<br>Por favor, Tente novamento com outro dados.</div>`);
							}
						});
					}
				}
			}
		}
			
						
						
			
			var $j = jQuery.noConflict();

			$('#txtTelefone').mask('(99) 9999-99999');
			$('#txtCpf').mask('999.999.999-99');
			$('#txtDataNasc').mask('9999-99-99');



			// function validaSen(){
			// 	let password = document.getElementById('txtPassword').value;
			// 	let rpPassword = document.getElementById('txtRpPassword').value;

			// 	if(rpPassword != password){
			// 		alert('Por favor insira senhas iguais nos dois campos!');
			// 		document.getElementById('txtPassword').value = ''
			// 		document.getElementById('txtRpPassword').value = ''
			// 	}
			// }
		</script>
</html>

