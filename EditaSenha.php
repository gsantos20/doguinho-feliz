

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
include_once('conexao.php');



if(isset($_SESSION['id_user']) != ''){
 $id_user = $_SESSION['id_user'];
}else{
	if(isset($_GET['alter']) == 1){
		$id_user = $_GET['id_user'];
		$href = 'login.php';
	}
}

?>

 <!-- <script>
alert(document.getElementById('div08').innerHTML);
 </script> -->
 <?php

// }
?>

<html>
<style>
    body *{
        font-family: 'Poppins';
    }
	main{
		zoom: 0.8;
	}
	.corbranca{
		color: white !important;
	}

.btn-primary{
    border-color: #3aa867!important;
}

.progress{
    height: 23px!important;
}
</style>
<title>DoguinhoFeliz</title>
<head>
<link rel="icon" href="Foto/paw-solid.svg">

<?php include_once('links.php'); ?>
</head>
<body>

      <?php 
		if(isset($_SESSION['id_user']) != ''){
			include_once('topmenu2.php');
			$href = 'index.php';
		}

	  ?>
<main>
	<form name="form1" id="form1"  method="post" action="seguranca/editaSen.php"class="form-horizontal" autocomplete="off">
	<div class="translateMultClass" style="visibility:hidden" id="div08" hidden>Senha alterada com succeso!</div>
		<input type="hidden" value="<?php if(isset($_GET['alter']) == 1){ echo $_GET['alter'];}?>" name="hdnReset" id="hdnReset">
		<input type="hidden" value="0" name="hdnNivelSenha" id="hdnNivelSenha">
		<input type="hidden" value="<?php echo $id_user?>" name="hdnIdUser" id="hdnIdUser">

		<br>
		<br>
        <br>
		<div class="container">
			<h4>Alteração de Senha</h4>

			<hr>
            <br>

            <p id="Att" style="text-align: center;color:red;">Sua senha deve ser uma combinação de letras maiúsculas, minúsculas,<br> números e caracteres especiais,e devem ter pelo menos de 8 a 12 caracteres. </p>

			<div class="form-group">
				<div class="col-sm-12">
					<div id="divMostraR"></div>
				</div>
            <br>
			<div class="row">
				<label class="col-sm-3 col-sm-offset-3 control-label" style="font-size: 16px"><translateMult>Informe sua nova senha:</translateMult></label>
				<label class="col-sm-3">
					<input name="pwsNova" type="password" class="form-control input-sm" autocomplete="off"  id="pwsNova" OnkeyUp="pwComplexity(this.value)" maxlength="15">
				</label>
			</div>

			<div class="row">
				<label class="col-sm-3 col-sm-offset-3 control-label" style="font-size: 16px"><translateMult>Confirme sua nova senha:</translateMult></label>
				<label class="col-sm-3">
					<input name="pwsConfirm" type="password" autocomplete="off" class="form-control input-sm" id="pwsConfirm" onFocus="this.value='';" onKeyDown="t123('Button1')" maxlength="15"/>
				</label>
			</div>

			<div class="row">
				<label class="col-sm-3 col-sm-offset-3 control-label" style="font-size: 16px"><translateMult>Nível de Segurança:</translateMult></label>
				<label class="col-sm-3">
					<div class="progress">
						<div class="progress-bar" id="progressbar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</label>
			</div>
<br>
			<div class="row">
				<div class="col-md-1 col-md-offset-8 pull-rigth">
					<label class="col-md-1">
						<button name="btnE" type="button" class="btn btn-primary" style="background-color:#6AB99D !important" onClick="Enviar()">
							Alterar</button>
					</label>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
		<input name="MM_VerifyData" type="hidden" id="MM_VerifyData" value="form1">

	<div class="translateMultClass" style="visibility:hidden" id="div01" hidden>Preencha os campos!</div>
	<div class="translateMultClass" style="visibility:hidden" id="div02" hidden>Senha muito fraca! Tente combinar números, letras e caracteres especiais!</div>
	<div class="translateMultClass" style="visibility:hidden" id="div03" hidden>A senha deve conter no mínimo 8 caracteres!</div>
	<div class="translateMultClass" style="visibility:hidden" id="div04" hidden>Não utilize seu nome como senha!</div>
	<div class="translateMultClass" style="visibility:hidden" id="div05" hidden>Aguarde ...</div>
	<div class="translateMultClass" style="visibility:hidden" id="div09" hidden>Ocorreu um erro, Tente Novamente ...</div>
	<div class="translateMultClass" style="visibility:hidden" id="div06" hidden>As senhas não estão iguais!</div>
	<div class="translateMultClass" style="visibility:hidden" id="div07" hidden>A senha deve conter ao menos uma letra minúscula e uma letra maiúscula, números e caracteres especiais!</div>
	</form>
	<br>
</main>
</body>

        <?php include 'footer.php';?>
</html>


<script>
	function pwComplexity(password){
		let score = 0
		if (password.match(/(.*[!,@,#,$,%,^,&,*,?,_,~].*[!,@,#,$,%,^,&,*,?,_,~])/)) score += 5
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) score += 10
		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) score += 15
		if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([0-9])/)) score += 15
		if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([a-zA-Z])/)) score += 15
		if (password.match(/(.*[0-9].*[0-9].*[0-9])/))  score += 5
		if (password.match(/(.*[!,@,#,$,%,^,&,*,?,_,~].*[!,@,#,$,%,^,&,*,?,_,~])/)) score += 5
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) score += 10
		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) score += 15
		if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([0-9])/)) score += 15
		if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([a-zA-Z])/)) score += 15

		let percent = score + "%"
		document.querySelector("#progressbar").style.width = percent;
		document.querySelector("#hdnNivelSenha").value = score;
	}

	function Enviar(){
		var d = document.form1;
		
		var formdata = new FormData($("form[name='form1']")[0]);

		if(d.pwsNova.value == '' || d.pwsConfirm.value == ''){
			alert(document.getElementById('div01').innerHTML);
			return 0;
		}
		if(document.getElementById('hdnNivelSenha').value < 50){
			alert(document.getElementById('div02').innerHTML);
			return 0;
		}
		if(d.pwsNova.value.length < 8){
			alert(document.getElementById('div03').innerHTML);
			return 0;
		}
		if (d.pwsNova.value.match(/([a-z])/) && d.pwsNova.value.match(/([0-9])/) && d.pwsNova.value.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && d.pwsNova.value.match(/([A-Z])/)){
			if(d.pwsNova.value == d.pwsConfirm.value){
				d.btnE.disabled = true;

				Swal.fire({
				title: 'Deseja Alterar sua Senha?',
				html: "Você tem certeza que deseja alterar sua Senha?<br><br>Lembre de confirmar os dados antes de prosseguir.",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#6AB999',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Alterar',
				cancelButtonText: 'Cancelar'
				}).then((result) => {
				if (result.isConfirmed) {
					//r = confirm('Você tem certeza que deseja alterar sua Senha?\n\nLembre de confirmar os dados antes de prosseguir.');
					//if(r){
						$.ajax({
							url:"seguranca/editaSen.php",
							data: formdata,
							method:"POST",
							dataType: "json",
							contentType: false,
							processData: false,
							beforeSend:function(){
								$('#divMostraR').html("<div class='alert alert-info'>Aguarde, Processando Dados...</div>");
								$('#Att').hide();
							},
							success:function(retorno) {
								alert(document.getElementById('div08').innerHTML);
								$('#divMostraR').html("<div "+retorno.cor+">"+retorno.msg+"</div>");
								$('#Att').hide();
								window.location.assign('<?php print $href;?>');
								
							},
							error: function(retorno){
								alert(document.getElementById('div09').innerHTML);
								$('#divMostraR').html(`<div class='alert alert-danger' style="text-align: center;">Atenção!<br> Não foi possivel alterar sua senha.<br>Por favor, Tente novamento.</div>`);
							}
						});
					}
				})
			}else{
				alert(document.getElementById('div06').innerHTML);
				return 0;
			}
		}else{
			alert(document.getElementById('div07').innerHTML);
		}
	}
</script>