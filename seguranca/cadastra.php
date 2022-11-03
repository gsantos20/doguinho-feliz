
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../conexao.php');

//$username = mysqli_real_escape_string($conexao, $_GET['txtUsername']);
//$password = mysqli_real_escape_string($conexao, $_POST['txtPassword']);
$firstName = mysqli_real_escape_string($conexao, $_GET['txtFirstName']);
$lastName = mysqli_real_escape_string($conexao, $_GET['txtLastName']);
$cpf = mysqli_real_escape_string($conexao, $_GET['txtCpf']);
$email = mysqli_real_escape_string($conexao, $_GET['txtEmail']);
$telefone = mysqli_real_escape_string($conexao, $_GET['txtTelefone']);
$tpPerfil = mysqli_real_escape_string($conexao, $_GET['slcTipoPerfil']);



//    echo md5($password);

$novaSenha_n = "DOGF@";
$novaSenha_l = 2022;
$password = $novaSenha_n .$novaSenha_l;

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");



$query = "INSERT INTO Usuarios (password, email, nu_perfil_usuario, first_name, last_name, cpf, telefone, expired_sen) VALUES (md5('{$password}'), '{$email}', '{$tpPerfil}', '{$firstName}', '{$lastName}', '{$cpf}', '{$telefone}', '{$today}' )";

$result = mysqli_query($conexao, $query);


if ($result) {
      $_SESSION['cadastrado'] = true;
      $msg = "Usuario Inserido com sucesso!";
      $cor = "class='alert alert-success'";
     //header('Location: ../cadastraUsuario.php');

} else {
  $_SESSION['nao_cadastrado'] = true;
  $msg = "Ocorreu um erro, Usúario não cadastrado!";
  $cor = "class='alert alert-danger'";
  //header('Location: ../cadastraUsuario.php');
}

$retorno = array('msg' => $msg, 'cor' => $cor);
print (json_encode($retorno));
exit();


?>