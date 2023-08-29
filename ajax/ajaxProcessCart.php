<?php
session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
include('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$id_user = $_SESSION['id_user'];

$query_cart = "SELECT * FROM Carrinho 
INNER JOIN Produtos
ON Carrinho.id_Prod = Produtos.id_Prod where usuario='{$id_user}'";

$results_prod = mysqli_query($conexao, $query_cart);

$today = date("Y-m-d h:i:s");


    while($row = $results_prod->fetch_assoc()){

      $id_prod = $row['id_prod'];

        $subTotalItem = $_POST['hdnSubTotal'.$id_prod];

        $quantity = $_POST['txtQuantidade'. $id_prod];

          $query_update = "update Carrinho set quantidade = $quantity, total = $subTotalItem, data_att = NOW() where id_prod='$id_prod' and usuario = '{$id_user}'";
          echo $query_update;
          $result_update = mysqli_query($conexao, $query_update);
    }