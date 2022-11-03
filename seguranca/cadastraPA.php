

<?php
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
include('../conexao.php');

require_once '/home/ubuntu/vendor/autoload.php';

//$password = mysqli_real_escape_string($conexao, $_POST['txtPassword']);
$firstName = mysqli_real_escape_string($conexao, $_POST['txtFirstNamePA']);
$lastName = mysqli_real_escape_string($conexao, $_POST['txtLastNamePA']);
$cpf = mysqli_real_escape_string($conexao, $_POST['txtCpfPA']);
$dataNasc = mysqli_real_escape_string($conexao, $_POST['txtDataNascPA']);
$email = mysqli_real_escape_string($conexao, $_POST['txtEmailPA']);
$telefone = mysqli_real_escape_string($conexao, $_POST['txtTelPA']);



$novaSenha_n = "DOGF@";
$novaSenha_l = 2022;
$password = "$novaSenha_n$novaSenha_l";

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");



$query_insert= "INSERT INTO Usuarios (password, email, nu_perfil_usuario, first_name, last_name, cpf, telefone, expired_sen) VALUES (md5('{$password}'), '{$email}', 0, '{$firstName}', '{$lastName}', '{$cpf}', '{$telefone}', '{$today}' )";
$query_insert= "INSERT INTO Usuarios (password, email, nu_perfil_usuario, first_name, last_name, cpf, telefone, expired_sen) VALUES (md5('{$password}'), '{$email}', 0, '{$firstName}', '{$lastName}', '{$cpf}', '{$telefone}', '{$today}' )";

$qryUsuarioEmail = "select * from Usuarios where email = '$email'";

$result_qryUsuarioEmail = mysqli_query($conexao, $qryUsuarioEmail);

$row_count = mysqli_num_rows($result_qryUsuarioEmail);

$destino = $_POST['txtEmailPA'];

$user = $_POST['txtEmailPA'];

//$nome_usuario = $firstName $lastName;


//echo "<br>" . md5($password);

//echo $row_count;
    if($row_count == 0){
      if (mysqli_query($conexao, $query_insert)) {
        $_SESSION['cadastrado'] = true;

        $msg = "Cadastro realizado com sucesso!<br><br> As Credenciais de acesso serão enviadas para o endereço de e-mail utilizado no cadastro.";
        $cor = "class='alert alert-success'";
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
            <table style='border: 2px solid #bfbfbf;margin-left: auto;margin-right: auto;width: 600px;height: auto;font-size: 13px;color:#595959;background-color: white;zoom: 0.8;' align='center' cellspacing="0" cellpadding="0">
              <tbody>
                  <tr align="left">
                    <td>
                        <table >
                          <tr align="right">
                              <td>
                              <br>
                                <img style="max-width: 15em; max-height: 7.5em; width: auto; height: auto;" src="https://doguinhofeliz.mytcc.com.br/images/Doguinho2.png">
                              </td>
                          </tr>
                          <tr>
                              <td>
                              </td>
                          </tr>
                        </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 1rem!Important;">
                    <table style="margin-left: auto;margin-right: auto;width: 600px;height: auto; padding-left: 30px;padding-right: 30px;padding-bottom: 30px; font-size: 13px;color:#595959;" align="left" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                        <div style="text-align:justify; text-align:justify;font-size: 15px; font-family:Poppins;">
                          <span style="font-size: 20px;font-family:Poppins"><b>Prezado(s) Senhor(es),</b><b></b></span><br>
                        </div>
                        <div style="text-align:justify; text-align:justify; text-align:justify;font-size: 15px; font-family:Poppins;">
                          <p style="font-size: 16px;font-family:Poppins;font-weight: 500;color: #7a7a7a;">
                          Olá $firstName  $lastName, Você solicitou seu Primeiro Acesso ao DoguinhoFeliz.
                          </p>
                          <p style="font-size: 20px;font-family:Poppins;margin-top: 30px">
                              <b>Segue suas credenciais de acesso:</b>
                          </p>
                        </div>
                        <p style="font-size: 17px;font-family:Poppins;color: #6ab99d;margin-top: 30px;font-weight: 500;"> Usuário:   <b style="color: black">$user</b></p>
                        <p style="font-size: 17px;font-family:Poppins;color: #6ab99d;font-weight: 500;margin-bottom: 35px;"> Senha :   <b style="color: black">  DOGF@2022</b></p>
                        <p style="font-size: 12px;font-family:Poppins;text-align:center;"><a style="color:#ffffff;background-color:#6ab99d;border:solid 1px #43a047;width: 60%;border-radius:4px;box-sizing:border-box;text-decoration:none;display:inline-block;font-size:15px;font-weight:500;margin:0;padding:10px 20px;border-color:#43a047;margin-bottom: 29px;" href='https://doguinhofeliz.mytcc.com.br/login.php' target=_blank> Clique neste link para ser redirecionado ao sistema.</a></p>
                        
                      <tr>
                        <td>
                        <div style="text-align:justify">
                          <table id="tblDados" style="border-collapse: collapse !important;font-family: Poppins;font-size: 10px;width: 100%;color:#595959">
                            <tr class='columSolicitacao'>
                              <td style="font-size: 16px;" colspan="2">
                                <b>Atenciosamente,</b>
                                <br>

                              </td>
                              <br>
                            </tr>
                            <tr class='columSolicitacao'>
                              <td style="font-size: 16px;line-height: 2;" colspan="2">
                                <b>DoguinhoFeliz</b>
                              </td>
                            </tr>

                            <tr class='columSolicitacao'>
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

      $message = new Swift_Message('Primeiro Acesso');
      $message
      ->setFrom(['doguinhofeliztcc@gmail.com' => 'DoguinhoFeliz'])
      ->setTo(["$destino" => 'User'])
      ->setSubject('DOGUINHO FELIZ - Primeiro Acesso')
      
      ->setBody("$emailBody", 'text/html');

      $result_mail = $mailer->send($message);

    } else {
      $_SESSION['nao_cadastrado'] = true;
      $msg = "Ocorreu um erro, não foi possivel cadastrar";
      $cor = "class='alert alert-danger'";
      //header('Location: ../cadastraUsuario.php');
    }
  }else{
    $msg = "Ja existe um registro com este email, por favor tente novamente com outro!";
    $cor = "class='alert alert-warning'";
  }

$retorno = array('msg' => $msg, 'cor' => $cor);
print (json_encode($retorno));
exit();



?>
