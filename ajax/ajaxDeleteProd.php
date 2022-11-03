<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

$id_prod = $data->id_prod;

$id_user = $_SESSION['id_user'];

$where = "id_prod='{$id_prod}'";

$query_prod = "SELECT * FROM Carrinho
INNER JOIN Produtos
ON Carrinho.id_prod = Produtos.id_prod where Carrinho. ".$where;

$results_prod = mysqli_query($conexao, $query_prod);


if($results_prod->num_rows == 0){
    $queryDelete = "delete from Produtos where ".$where;
    $queryDelete = mysqli_query($conexao, $queryDelete);
   

$query = "select * from Produtos where 1=1 order by nome_prod asc";

$result = mysqli_query($conexao, $query);

$row_cnt = mysqli_num_rows($result);

$rows = array();
while($row = mysqli_fetch_assoc($result)){ 
    $rows[] = $row;
 }
    
    


?>

<table class="table table-striped table-hover table-bordered" style="align:center;font-size:25px!important; width:100%!important;padding: 15px 0px" id="tbCadastrados">
                            <thead>
                                <tr align="center" style="font-size: 12px; background-color:#71ADA5; color: black;">
                                    <td><center><b><div class="translateMult en">Nome Produto</div></b></center></td>
                                    <td><center><b><div class="translateMult pt-br">Descrição</div></b></center></td>
                                    <td><center><b><div class="translateMult pt-br">Estoque</div></b></center></td>
                                    <td><center><b><div class="translateMult pt-br">Preço</div></b></center></td>
                                    <td><center><b><div class="translateMult pt-br">Excluir</div></b></center></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    foreach($rows as $row){
                                    ?>
                                    <tr align="center" style="font-size: 12px; background-color:white">
                                        <td><center><?php echo $row['nome_prod'];?></center></td>
                                        <td><center><?php echo $row['descricao'];?></center></td>
                                        <td>
                                            <center>
                                            <?php 
                                            if($row['estoque'] == 0){
                                                    echo "Indisponivel";
                                                }else{
                                                    echo $row['estoque'];
                                                }
                                            ?>
                                            </center>
                                        </td>
                                        <td><center>
                                            R$ <?php echo $row['preco'];?>
                                            </center></td>
                                        <td style="font-size: 16px;">
                                            <center>
                                                <a href="javascript:void(0);" onClick="removeProd(<?php echo $row['id_prod'];?>)  ;">
                                                    <div class="bi bi-trash hoverAzul" style="color: black; cursor: hand;"></div>
                                                </a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

<?php }else{
    http_response_code(500);
}
exit(); 
?>