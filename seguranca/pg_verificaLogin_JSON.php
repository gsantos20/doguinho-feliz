<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../conexao.php');

require_once '/home/ubuntu/vendor/autoload.php';

$txtEmailT = mysqli_real_escape_string($conexao, $_POST['txtEmailT']);

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");


$campos = "id_user, email, first_name, last_name";

$qry_Usuario = "select $campos from Usuarios where email = '$txtEmailT'";

$qry_buscaUltNumero = "select id_alt, email, numero, data_alteracao, alter_senha, id_user from Alteracao_Senha where email = '$txtEmailT'";

$qry_buscaUltNumero_count = "select count(*) from Alteracao_Senha";




$result_qry_Usuario = mysqli_query($conexao, $qry_Usuario);


$row = mysqli_fetch_array($result_qry_Usuario);

$row_count = mysqli_num_rows($result_qry_Usuario);


$result_qry_buscaUltNumero = mysqli_query($conexao, $qry_buscaUltNumero);


$row2 = mysqli_fetch_array($result_qry_buscaUltNumero);

$row2_count = mysqli_num_rows($result_qry_buscaUltNumero);




$nome_usuario = "{$row['first_name']} {$row['last_name']}";


if($row != null && $row['id_user'] != ''){
	$id_user = $row['id_user'];
	}
	else{
	$id_user = 0;
	}

	if($row2 != null && $row2['numero'] == 0){
		$novaSenha_n = 1;
	}
	elseif($row2 != null && $row2['numero'] >= 1000){
		$novaSenha_n = 1;
	}
	elseif($row2 != null){
		$novaSenha_n = $row2['numero'] + 1;
	}



	
$novaSenha_L = "DOGF@";

$novaSenha_n = 1;

$msg = '';
$cor = "class='alert alert-info'";

if($row != null && $row_count > 0){
	if($row['email'] == ''){
 		$msg = 'Seu usúario não tem email, por favor, atualize no registro:';
		$cor = "class='alert alert-warning'";
	}
  
	elseif($row['email'] != $txtEmailT){
 		$msg = 'O email inserido é diferente do cadastrado, por favor, verifique novamente';
 		$cor = "class='alert alert-warning'";
	}
	else{
		$ano = 2022;
		$novaSenha =  "$novaSenha_L$ano";
		/* inserir o numero */
		 if($row2 != null && $row2_count == 0){
			$alter_sen = 1;
		 	/*$query_insert = "insert into Alteracao_Senha (usuario ,numero ,data_alteracao ,alter_senha ,id_user) values ({'$txtUsuarioT'}, {$novaSenha_n}, {'$today'}, 1, {$row['id_user']})";
		 	$result_query_insert = mysqli_query($conexao, $query_insert);*/

			 

		}
		
		else{
			$alter_sen = 2;
			/*$query_update = "update Alteracao_Senha set numero = {$novaSenha_n}, data_alteracao = '$today', alter_senha = 1, id_user = {$row['id_user']} WHERE usuario = '$txtUsuarioT'";
			$result_query_update = mysqli_query($conexao, $query_update);*/
		}
		/*
		$novaSenhamd5 = md5("$novaSenha");
		//$date_expire = date('Y-m-d h:i:s', strtotime($today. ' + 3 Months'));
		$date_expire = $today;
		$query_update_user = "update Usuarios set password = '$novaSenhamd5', status = 0, updatter = 1884, expired_pwd = '$date_expire' where id_user = $row[id_user]";
		$result_query_update_user = mysqli_query($conexao, $query_update_user);
		*/
		

			// the message
	    $msg = "<br><br>" . "Sua nova senha para entrar no DoguinhoFeliz é:  {$novaSenha} Ao fazer o login com a nova senha que você inseriu, você será solicitado a mudá-la para uma senha de sua escolha. DoguinhoFeliz login: {$BASE_URL}/login.php E-MAIL AUTOMÁTICO: Por favor, não responda!";

		$destino = $row['email'];

		$email = $row['email'];

		$emailBody = <<<EOF
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>

        *{
            font-family: Poppins, sans-serif!important;
        }

        img + div { display:none; }
    </style>
  </head>

    <body>
      <table style="border: 2px solid #bfbfbf;margin-left: auto;margin-right: auto;width: 600px;height: auto;font-size: 13px;color:#595959;background-color: white;zoom:0.9;" align="center" cellspacing="0" cellpadding="0">
        <tbody>
          <tr align="left">
          <td>
            <table >
              <tr align="right">
                <td>
                <img style="max-width: 15em; max-height: 7.5em; width: auto; height: auto;" src="$BASE_URL/images/Doguinho.png">
                
                </td>
              </tr>
              <tr>
                <td>
                <br>
                </td>
              </tr>
            </table>
          </td>
          </tr>
          <tr>
          <td style="padding: 1rem!important;">
          <table style="margin-left: auto;margin-right: auto;width: 600px;height: auto; padding-left: 30px;padding-right: 30px;padding-bottom: 30px; font-size: 13px;color:#595959;" align="left" cellspacing="0" cellpadding="0">
            <tr>
            <td>
            <div style="text-align:justify; text-align:justify;font-size: 15px; font-family:Poppins;">
              <span style="font-size: 18px;font-family:Poppins"><b>Prezado(s) Senhor(es),</b><b></b></span><br>
            </div>
            <div style="text-align:justify; text-align:justify; text-align:justify;font-size: 15px; font-family:Poppins;">
              <p style="font-size: 16px;font-family:Poppins;font-weight: 500;color: #7a7a7a;">
              Olá $nome_usuario, Recebemos uma solicitação para restaurar sua senha de acesso em nosso site.
              </p>
              <p style="font-size: 18px;font-family:Poppins;margin-top: 30px">
                <b>Clique abaixo para recuperar sua senha.</b>
              </p>
            </div>
            <!--
            <p style="font-size: 17px;font-family:Poppins;color: #6ab99d;margin-top: 30px;font-weight: 500;"> Email:   <b style="color: black"> $email</b></p>
            <p style="font-size: 17px;font-family:Poppins;color: #6ab99d;font-weight: 500;margin-bottom: 35px;"> Senha :   <b style="color: black"> DOGF@2022</b></p>
            -->
            <p style="font-size: 12px;font-family:Poppins;text-align:center;"><a style="color:#ffffff;background-color:#6ab99d;border:solid 1px #43a047;width: 50%;border-radius:4px;box-sizing:border-box;text-decoration:none;display:inline-block;font-size:15px;font-weight:500;margin:0;padding:10px 20px;border-color:#43a047;margin-bottom: 29px;" href="$BASE_URL/EditaSenha.php?id_user={$row['id_user']}&alter={$alter_sen}" target=_blank> Clique neste link para ser redirecionado ao sistema.</a></p>
            <br>
            <small>Caso não tenha solicitado a restauração de sua senha, ignorar este email.</small>
            <tr>
            <td>
            <div style="text-align:justify">
              <table id="tblDados" style="border-collapse: collapse !important;font-family: Roboto;font-size: 10px;width: 100%;color:#595959">
              <tr class="columSolicitacao">
                <td style="font-size: 16px;" colspan="2">
                <b>Atenciosamente,</b>
                <br>

                </td>
                <br>
              </tr>
              <tr class="columSolicitacao">
                <td style="font-size: 16px;line-height: 2;" colspan="2">
                <b>DoguinhoFeliz</b>
                </td>
              </tr>

              <tr class="columSolicitacao">
                <td style="font-size: 15px;" colspan="2"><i>Obs: Favor não responder diretamente esta mensagem, pois, este é um e-mail automático do Sistema DoguinhoFeliz.</i></td>
                <br>
              </tr>
              </table>
            </div>
            </td>
            </tr>
          </table>
          </div>
          <br>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</tbody>
</table>
</body>
</html>
EOF;

		$transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
		$transport->setUsername('doguinhofeliztcc@gmail.com')->setPassword("xegluvaatvlxnujq");


		$mailer = new Swift_Mailer($transport);

		$message = new Swift_Message('Alteração de senha');
		$message
		->setFrom(['doguinhofeliztcc@gmail.com' => 'DoguinhoFeliz'])
		->setTo(["$destino" => 'User'])
		->setSubject('DOGUINHO FELIZ - Redefinição de senha')
		
		->setBody("$emailBody", 'text/html');

		$result = $mailer->send($message);

     /* Grava log do email enviado */
    $query_insert_logEmail ="insert into LogEmail(data_envio,corpo_email,assunto_email,Destinatario,tipoEmail) values ('$today','$emailBody','DOGUINHO FELIZ - Redefinição de senha','$destino', 2)";
    $result_query_insert_logEmail = mysqli_query($conexao, $query_insert_logEmail);


		 $msg = "Email enviado com sucesso!" . "<br>" . "As informações da restauração de senha serão enviadas para o endereço de e-mail" . "<b>   " . $row['email'] . "</b>";
 		 $cor = "class='alert alert-success'";
	
		}
 }
 else{
	$msg = "Usuário não encontrado!:";
	$cor = "class='alert alert-danger'";
	
 }


 // /* Grava log das requisicoes feitas nesta pagina */
$query_insert_log ="insert into log_resetSenha (email,data_tentativa,retorno) values ('$txtEmailT','$today','$msg')";
$result_query_insert_log = mysqli_query($conexao, $query_insert_log);


		
$retorno = array('msg' => $msg, 'cor' => $cor);
print (json_encode($retorno));
exit();



?>
