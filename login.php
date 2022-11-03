<?php


 if (isset($_SESSION['username'])) {
   unset($_COOKIE['PHPSESSID']);
   setcookie('PHPSESSID', '', time() - 3600, '/'); // empty value and old timestamp
 }

 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="icon" href="Foto/paw-solid.svg">
	

    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	
	<link href="Assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/metro/4.4.3/js/metro.min.js" integrity="sha512-/Ix/SVCN0erpULzS6CwAa0lliU1jZpw2eyJbn5+3U3NQczMSc39SHbLap2/gcO5rT8z6mHnDF4Nnsxt2U9RjfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metro/4.4.3/css/metro-all.min.css" integrity="sha512-Cgzrg+DM0kLkI2T0rsoTfN5H24ehMxyT33djRfD4v2bMf6zc4gFM2Ci5dUr4Gn2pj3lL26ekRRq4UgsqlO4Gjw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
	<link rel="stylesheet" href="styles/style-login.css" type="text/css">

	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js" integrity="sha512-hAJgR+pK6+s492clbGlnrRnt2J1CJK6kZ82FZy08tm6XG2Xl/ex9oVZLE6Krz+W+Iv4Gsr8U2mGMdh0ckRH61Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	<title>DoguinhoFeliz</title>
</head>
<body>
<form name="loginform" id="loginform" method="post" autocomplete="off">
<div class="translateMultClass" style="display: none;visibility:hidden" id="div09">Ocorreu um erro, Tente Novamente ...</div>
<div class="translateMultClass" style="display: none;visibility:hidden" id="div10">Logando ...</div>
<input type="text" id="hdnIp" name="hdnIp" value="" hidden>

	<div class="main-login">
		<div class="left-login">
		<h2 style="text-align: center">Faça Login ou Cadastre-se <br>
			no DoguinhoFeliz</h2>
		<img src="Foto/veterinario.svg" class="left-login-image" alt="Veterinario Animação">
	</div>
	<div class="right-login">
		<div class="card-login">
			<div class="title">
			    <h1>Log In</h1>
			</div>
			<div class="textfield">
				<label for="txtEmail">Email</label>
				<input type="text" class="fontAwesome" name="txtEmail" id="txtEmail" placeholder="&#xf007   Usuário">
			</div>
			<div class="textfield">
				<label for="txtPassword">Senha</label>
				<input type="password" class="fontAwesome" name="txtPassword" id="txtPassword" placeholder="&#xf023    Senha">
			</div>

            <div class="form-group">
				<!-- <div class="notification is-danger" id="notAuth" style="font-size: 18px;margin-top: 20px;color: red; display: none">
					<p>ERRO: Usúario ou senha inválidos.</p>
				</div> -->    
	        </div>

			<div class="container">
				<div class="row">
					<div class="col-sm-6" style="text-align: left">
						<a href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#myModal" style="color:#000">Esqueceu a Senha?</a>
					</div>
					
					<div class="col-sm-6" style="text-align: right">
						<a href="" id="forPass" href="#" data-bs-toggle="modal" data-bs-target="#modalPrimeiroAcesso" style="color:#000">Primeiro Acesso?</a>
					</div>
				</div>
			</div>
    
			<button type="button" class="btn-login" id="btn-login" onclick="enviarDados()">
				<span class="spinner-border spinner-border-sm" id="loaderLogin" style="display:none" role="status" aria-hidden="true"></span>
				Entrar <i class="m-icon-swapright m-icon-white"></i>
			</button>
				
		</div>

	</div>
</div>
</form>



    <!--- Modal (inicio) --->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
						<h4 class="modal-title" id="myModalLabel" style="font-family: 'Poppins'"><b>Esqueci a Senha</b></h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	                </div>
	                <div class="modal-body">
	                    <form name="frmMudaSenha" id="frmMudaSenha" method="post" class="form-horizontal">
	                        <div class="form-group">
	                            <div class="col-sm-8">
	                                <label for="txtEmailT" class="form-label">Email:</label>
	                                <input type="text" name="txtEmailT" value="" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-sm-12">
	                                <div id="divMostraR"></div>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn" data-bs-dismiss="modal" onclick="Limpa();">
	                        Fechar <span class="glyphicon glyphicon-remove"></span>
	                    </button>
	                    <button type="button" class="btn" onclick="Alterar();">
	                        Alterar Senha <span class="glyphicon glyphicon-send"></span>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div><!--- Modal (Fim) --->

        <!------- MODAL PRIMEIRO ACESSO ------->
	<div class="modal fade" id="modalPrimeiroAcesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel" style="font-family: 'Poppins'"><b>Primeiro Acesso</b></h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form name="frmCadPA" id="frmCadPA" method="post" class="form-horizontal">
						<input type="hidden" id="hdnInsere" name="hdnInsere" value="1">
                        <div class="row">
							<div class="col-sm-3">
								<label for="txtFirstNamePA" class="form-label">Nome:</label> 
								<input type="text" id="txtFirstNamePA" name="txtFirstNamePA" value="" class="form-control">
							</div>
                            <div class="col-sm-3">
								<label for="txtLastNamePA" class="form-label">Sobrenome:</label> 
								<input type="text" id="txtLastNamePA" name="txtLastNamePA" value="" class="form-control">
							</div>
							<div class="col-sm-6">
								<label for="txtEmailPA" class="form-label">Email:&nbsp; <i style="cursor:hand; color:red !important" class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" data-html="true" title="O nome de usuário deve único"></i></label>
								<input type="text" id="txtEmailPA" name="txtEmailPA" onchange="ValidaEmail(this);" value="" class="form-control">
							</div>
                        </div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label>Telefone:</label>
								<input type="text" id="txtTelPA" name="txtTelPA" value="" placeholder="(99) 99999-9999" class="form-control">
							</div>
                            <div class="col-sm-4">
								<label>CPF:</label>
								<input type="text" id="txtCpfPA" name="txtCpfPA" value="" placeholder="999.999.999-99" class="form-control">
							</div>
							<div class="col-sm-4">
								<label>Data Nasc:</label>
								<input type="date" id="txtDataNascPA" name="txtDataNascPA" value="" class="form-control">
							</div>
						</div>
						<div class="row">							
							<div class="col-sm-12">
								<div id="divMostraPA"></div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn" data-bs-dismiss="modal" onclick="Limpa();">
						Fechar <span class="glyphicon glyphicon-remove"></span>
					</button>
					<button type="button" class="btn" onclick="cadastraPA();">
						Cadastrar <span class="glyphicon glyphicon-ok"></span>
					</button>
				</div>
			</div>
		</div>
	</div>

</body>

<script>
		<?php if(isset($_GET['PA']) == true){ ?>
				setTimeout(function(){
					var modalPa = new bootstrap.Modal(document.getElementById('modalPrimeiroAcesso'));
					modalPa.show()
				}, 500);
		<?php }?>
	</script>

<script>

    $('#txtTelefone').mask('(99) 9999-99999');
    $('#txtTelPA').mask('(99) 9999-99999');
    $('#txtCpf').mask('999.999.999-99');
    $('#txtCpfPA').mask('999.999.999-99');
	$("#txtDataNascPA").mask("9999-99-99");
    
    

</script>




<script>


    function cadastraPA(){
		var formdata = new FormData($("form[name='frmCadPA']")[0]);
		var d2 = document.frmCadPA;
		var s = '';
		var erro = false;

		s = "<b>Preencha os campos:</b>";
		if(d2.txtEmailPA.value == ''){erro = true; s=s+"<br> - E-mail";}
        if(d2.txtFirstNamePA.value == ''){erro = true; s=s+"<br> - Nome";}
		if(d2.txtCpfPA.value == ''){erro = true; s=s+"<br> - CPF";}
        if(d2.txtTelPA.value == ''){erro = true; s=s+"<br> - Telefone";}
        //if(d2.txtDataNascPA.value == ''){erro = true; s=s+"<br> - Telefone";}

		if(erro){
			$('#divMostraPA').html("<div class='alert alert-danger'>"+s+"</div>");
		}else{
				$.ajax({
					url:"seguranca/cadastraPA.php",
					data:formdata,
					type:"post",
					dataType: "json",
					contentType: false,
					processData: false,
					beforeSend:function(){
						$('#divMostraPA').html("<div class='alert alert-info'>Aguarde, Processando Dados...</div>");
					},
					success:function(retorno) {
						$('#divMostraPA').html("<div "+retorno.cor+">"+retorno.msg+"</div>");
					},
					error: function(retorno){
						$('#divMostraPA').html(`<div class='alert alert-danger' style="text-align: center;">Atenção!<br> Não foram encontrados registros.<br>Por favor, Tente novamento com outro dados.</div>`);
					}
				});
		}
	}

    var $j = jQuery.noConflict();


		// $("#txtDataNascPA").datepicker({
		// dateFormat: 'dd/mm/yy',
		// changeMonth: true,
		// changeYear: true,
		// yearRange: "1970:+nn",
		// dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
		// dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		// dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		// monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		// monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']

		// });

</script>

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

/*const ipAPI = '//api.ipify.org?format=json'

const inputValue = fetch(ipAPI)
.then(response => response.json())
.then((data) => {return data.ip});

const printIp = () => {
	inputValue.then((ip) => {
		$.ajax({
				url:"teste2.php?ip="+ip,
				type:"GET",
				contentType: false,
				processData: false,
				beforeSend:function(){
					
				},
				success:function(retorno) {
					console.log('foi');
				},
				error: function(retorno){
					
				}
			});
});
};

printIp();
*/
	
function enviarDados(){
    var formdata = new FormData($("form[name='loginform']")[0]);
	
	$('#loaderLogin').delay(20).fadeIn();
    document.getElementById('btn-login').disabled = true;

	var msg = '';


	if(document.getElementById('txtEmail').value == ""){
		// alert("É necessário preencher o campo Usuário." );
		var msg = msg + ' - Email\n';
		document.loginform.txtEmail.focus();
		$('#loaderLogin').delay(1000).fadeOut();
        document.getElementById('btn-login').disabled = false;
	}
	if(document.getElementById('txtPassword').value == ""){
		var msg = msg + '- Senha\n';
		
		// alert("É necessário preencher o campo Senha." );
		document.loginform.txtPassword.focus();
		$('#loaderLogin').delay(1000).fadeOut();
        document.getElementById('btn-login').disabled = false;
	}
	if(msg != ''){
		alert('== PARA PROSSEGUIR PREENCHA OS SEGUINTES CAMPOS ==\n'+msg);
	}
	else{
        $.ajax({
            url:"enter.php",
            data:formdata,
			type: "post",
            dataType: "json",
            contentType: false,
            processData: false,
            success:function(retorno){
                if(retorno.id_user == null && retorno.cor == null && retorno.msg == null){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
                $('#notAuth').show();
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				heightAuto: true,
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
			})
				Toast.fire({
				icon: 'error',
				title: 'ERRO: Usúario ou senha inválidos!'
				})
            }
            else if(retorno.id_user != null && retorno.location == "edita"){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},

					willClose: (toast) => {
						setTimeout(function(){
							window.location.assign("https://doguinhofeliz.mytcc.com.br/EditaSenha.php");
						},200); 	
					}
				})
				Toast.fire({
				icon: 'success',
				title: 'Login Realizado com Sucesso!'
				}) 
            }
            else if(retorno.id_user != null){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
					willClose: (toast) => {
						setTimeout(function(){
							window.location.assign("https://doguinhofeliz.mytcc.com.br/MasterFrameSet.php");
						},200); 
						
					}
			})
				Toast.fire({
				icon: 'success',
				title: 'Login Realizado com Sucesso!'
				})
            }
            },
            error: function(retorno){
                if(retorno.id_user == null && retorno.cor == null && retorno.msg == null){
				$('#loaderLogin').delay(1000).fadeOut();
                document.getElementById('btn-login').disabled = false;
                //$('#notAuth').show();
				const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 1500,
				timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					},
					// willClose: (toast) => {
					// 	setTimeout(function(){
					// 		window.location.assign("https://doguinhofeliz.mytcc.com.br/login.php");
					// 	},200); 
						
					// }
			})
				Toast.fire({
				icon: 'error',
				title: 'ERRO: Usúario ou senha inválidos!'
				})
                
            }
        }
        });
    }
}

</script>



<script>
function Alterar(){
	var formdata = new FormData($("form[name='frmMudaSenha']")[0]);	
	var d2 = document.frmMudaSenha;
	var s = '';
	var erro = false;

	s = "<b>Preencha os campos:</b>";
	if(d2.txtEmailT.value == ''){erro = true; s=s+"<br> - E-mail";}

	if(erro){
		$('#divMostraR').html("<div class='alert alert-danger'>"+s+"</div>");
	}else{
		r = confirm("Você quer realmente alterar sua senha?");

		if(r){
			$.ajax({
				url:"seguranca/pg_verificaLogin_JSON.php",
				data:formdata,
				type:"post",
				dataType: "json",
				contentType: false,
				processData: false,
				beforeSend:function(){
					$('#divMostraR').html("<div class='alert alert-info'>Aguarde, Processando Dados...</div>");
				},
				success:function(retorno) {
					$('#divMostraR').html("<div "+retorno.cor+">"+retorno.msg+"</div>");
				},
				error: function(retorno){
					$('#divMostraR').html(`<div class='alert alert-danger' style="text-align: center;">Atenção!<br> Não foram encontrados registros.<br>Por favor, Tente novamento com outro dados.</div>`);
				}
			});
		}
	}
	}

	function Limpa(){
		var d2 = document.frmMudaSenha;
		d2.txtUsuarioT.value = '';
		d2.txtEmailT.value = '';
		$('#divMostraR').html("");
	}
</script>

<script>
var pass = document.getElementById("txtPassword");
var btn = document.getElementById("btn-login");
pass.addEventListener("focus", function() {
 pass.addEventListener('keypress', function (event) {
	console.log(event);
        if (event.keyCode === 13){
			event.preventDefault();
			$("#btn-login").click();
			
        }
    });
});

</script>


</html>