<?php
session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
include('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

$id_prod = $_GET['id_prod'];
$quantidade = $_GET['quantity'];
$id_user = $_SESSION['id_user'];

if(isset($_GET['tipo']) && $_GET['tipo'] == 'compra'){
  $queryDelete = "delete from Carrinho where usuario='{$id_user}'";
  $result_delete = mysqli_query($conexao, $queryDelete);
};

$query_cart = "select * from Carrinho where usuario='{$id_user}'";

$results = mysqli_query($conexao, $query_cart);

$query_cartVerify = $query_cart . " and id_prod='{$id_prod}'";

$results_verify = mysqli_query($conexao, $query_cartVerify);


    if($results_verify->num_rows > 0){
      $query_update = "update Carrinho set quantidade = quantidade + 1, data_att = NOW() where id_prod='$id_prod'";
      $result_update = mysqli_query($conexao, $query_update);
    }else{
      $query_insert = "insert into Carrinho (id_prod, quantidade, usuario,data_criacao,data_att) VALUES ('{$id_prod}','{$quantidade}','{$id_user}',NOW(),NOW())";
      $result_insert = mysqli_query($conexao, $query_insert);
    }
?>
