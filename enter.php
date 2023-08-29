<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

include('conexao.php');

//  if(empty($_POST['txtEmail']) || empty($_POST['txtPassword'])) {
//   	header('Location: login.php');
//   	exit();
//   }

$email = mysqli_real_escape_string($conexao, $_POST['txtEmail']);
$password = mysqli_real_escape_string($conexao, $_POST['txtPassword']);



date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

$pass = md5($password);

//$queryUsuario = "select * from Usuarios where username ='{$username}' and password = md5('{$password}')";

$queryUsuario = "select * from Usuarios where email ='$email' and password = '$pass'";


$result_queryUsuario = mysqli_query($conexao, $queryUsuario);

$row = mysqli_fetch_array($result_queryUsuario);

$id_user = $row['id_user'];

$expiraSen = $row['expira_sen'];


	


   if($row['email'] == $email && $row['password'] == $pass){
	$iduser = $id_user;
	   if($today >= $expiraSen){
		$_SESSION['email'] = $email;
		$_SESSION['id_user'] = $id_user;
		$result = mysqli_query($conexao, $query_delete);
		
		$location = "edita";
		$cor = "class='alert alert-success'";
		//header("Location: EditaSenha.php?id_user={$id_user}");
	   }
	   else{
 		$_SESSION['email'] = $email;
		$_SESSION['id_user'] = $id_user;
	 	$result = mysqli_query($conexao, $query_delete);
		$cor = "class='alert alert-success'";
  		//header("Location: index.php?id_user={$id_user}");
	}
   }
   else{
  	 	$_SESSION['nao_autenticado'] = true;
		$result = mysqli_query($conexao, $query_insert);
   		//header("Location: login.php");

   }

$retorno = array('msg' => $msg, 'cor' => $cor, 'id_user' => $_SESSION['id_user'], 'location' => $location);
print (json_encode($retorno));
exit();


?>



