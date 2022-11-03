<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// SDK do Mercado Pago
include_once 'vendor/autoload.php';
include('conexao.php');

$ip = $_GET['ip'];

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");
// Adicione as credenciais
/*MercadoPago\SDK::setAccessToken('TEST-4432656948811640-090420-361f047f592a49ab9c7e245232f78fb0-269206052');

if(isset($_REQUEST['collection_id'])){
    $id = $_REQUEST['collection_id'];


$payment_info = MercadoPago\Payment::find_by_id($id);

// convert object => json


   echo "<pre id='return'>";
     $json = var_dump($payment_info);

   $email = $payment_info->payer->email;*/


     /* Grava log das requisicoes feitas nesta pagina 
   $query_test ="insert into log_teste (date_insert,retorno,status_pag,id_pag,email_comprador) values (NOW(),'$json','$payment_info->status','$payment_info->id','$email')";
   $result = mysqli_query($conexao, $query_test);
*/

/*if($result){
    echo "foi";
  }else{
    echo mysqli_error($conexao);
  }
}*/

$query_test ="insert into log_ip (ip,data) values ('$ip', '$today')";
$result = mysqli_query($conexao, $query_test);


?>
<!--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<button class="button">
  <span class="text">Test</span>
  <i class="bi bi-check-lg icon"></i>
</button>


<style>
.button {
  position: relative;
  width: 7rem;
  height: 2rem;
  font-size: 10px;
  background-color: #202231;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: width .5s,
  border-radius .5s;
}
.button *{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50% ,-50%);
  transition: opacity .25s ;
}
.icon{
  opacity: 0;
}
.button:focus{
  width: 30px;
  background-color: #44c08a;
  border-radius: 50%;
}
.button:focus .text{
  opacity: 0;
}
.button:focus .icon{
  opacity: 1;
  transition-delay: .5s;
}
</style>

-->