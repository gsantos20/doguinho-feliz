<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  include('../conexao.php');

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");
  
$id_user = $_POST['hdnIdUser'];

 $queryBuscaNome = "select id_user,first_name,email, last_name from Usuarios WHERE id_user = $id_user";

 $result_queryBuscaNome = mysqli_query($conexao, $queryBuscaNome);


  $row = mysqli_fetch_array($result_queryBuscaNome);

  $email = $row['email'];

  $id = $row['id_user'];


 $pwsNova = md5($_POST['pwsNova']);

 $date_expire = date('Y-m-d h:i:s', strtotime($today. ' + 3 Months'));


   if(isset($_POST['hdnReset']) == 1){
      $query_insert = "insert into Alteracao_Senha (email,numero,data_alteracao,alter_senha,id_user) values ('$email',1,'$today',1,$id)";
      $result_query_insert = mysqli_query($conexao, $query_insert);
   }else{

    $query_update = "update Alteracao_Senha set numero = 1, data_alteracao = '$today', alter_senha = 1, id_user = $id WHERE email = '$email'";
    $result_query_update = mysqli_query($conexao, $query_update);
   }


    $atualizaSenha = "update Usuarios set password = '$pwsNova', expired_sen = '$date_expire' where id_user = $id_user";

    $result_queryBuscaNome = mysqli_query($conexao, $atualizaSenha);



$msg = "Senha Alterada com Sucesso!";
$cor = "class='alert alert-success'";



$retorno = array('msg' => $msg, 'cor' => $cor);
print (json_encode($retorno));
exit();



?>

