<?php
session_start();
//  error_reporting(E_ALL);
//  ini_set('display_errors', '1');
require_once('../conexao.php');
clearstatcache();

if($_SESSION['email'] == null or $_SESSION['email'] == ''){
    header('Location: ../login.php');
   exit();
  }

  

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");


$hdnCad = mysqli_real_escape_string($conexao, $_POST['hdnCadastra']);
$nome_prod = mysqli_real_escape_string($conexao, $_POST['txtProduto']);
$num_estoque = mysqli_real_escape_string($conexao, $_POST['numEstoque']);
$preco_prod = mysqli_real_escape_string($conexao, $_POST['txtPreco']);
$desc_prod = mysqli_real_escape_string($conexao, $_POST['txtDescProd']);
$categoria = mysqli_real_escape_string($conexao, $_POST['slcCategoria']);

if(isset($hdnCad) && $hdnCad == 1){

$baseCaminho = $BASE_URL . "/Foto/Produtos/";
$uploaddir = '/var/www/doguinhofeliz.mytcc.com.br/Foto/Produtos/';
$nomeArq = basename($_FILES['fileProd']['name']);
$uploadfile = $uploaddir . $nomeArq;

/*if (is_dir($uploaddir) && is_writable($uploaddir)) {
    // do upload logic here
} else {
    echo 'Upload directory is not writable, or does not exist.';
}
*/

if (move_uploaded_file($_FILES['fileProd']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!". $_FILES['fileProd']['error'];
}

$baseCaminho .= $nomeArq;
$preco_prod = str_replace(",","",str_replace("R$ ", "",$preco_prod));



$query_insert = "insert into Produtos (nome_prod, descricao, caminho, estoque, categoria, preco, data_indexacao, criador) VALUES ('{$nome_prod}','{$desc_prod}','{$baseCaminho}','{$num_estoque}','{$categoria}','{$preco_prod}',NOW(),{$_SESSION['id_user']})";

$result = mysqli_query($conexao, $query_insert);

}


?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="Foto/paw-solid.svg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/css/bootstrap-select.min.css" rel="stylesheet" />
</head>
<style>
    .form-label{
        float: left;
    }
</style>

<style>
    .hoverAzul:hover{
        color:  #016B5D!important;
        transition: all .3s ease;
        transform: scale(1.23);
    }
    body *{
        font-family: 'Poppins';
    }
    .panel-heading{
        background: #71ADA5;
        padding:20px;
        border-radius: 8px 8px 0px 0px;
    }
    .disable{
        display:none;
    }
    .enable{
        display:block;
    }
    .olhoaberto{
        <i class="bi bi-eye-fill"></i>
    }
    .olhofechado{
        <i class="bi bi-eye-slash-fill"></i>
    }
    #olho2{
        font-size: 27px;
        cursor: pointer;
        color: #fff;
    }
    #olho2:hover{
        color: #cfcfcf!important;
        transition: all .4s ease;
    }
    .alinha-botao-direita {
        text-align-last: right;
    }

        
    /*Esconder o input padrão. */
    #color-input {
    position: absolute;
    opacity: 0;
    }

    #pseudo-color-input {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: solid 1px #000;
        border-radius: 100px;
        position: relative;
        z-index: 1;
        cursor: pointer;
    }

    .form-control{
        border: 1px solid #ced4da;
    }

</style>

<body>

<?php include_once('../topmenu2.php')?>

<br>
<?php

$query = "select * from Produtos where 1=1 order by nome_prod asc";

$result = mysqli_query($conexao, $query);

$row_cnt = mysqli_num_rows($result);

$rows = array();
while($row = mysqli_fetch_assoc($result)){ 
    $rows[] = $row;
}


?>

<div class="container-fluid">
    <form name="cadProd" id="cadProd" method="POST" enctype="multipart/form-data">
    <input type="hidden" id="hdnCadastra" name="hdnCadastra" value="">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center" style="background-color: #6AB99D!important;align-items: center;justify-content: center;justify-items: center;display: flex;height: 4rem;">
                        <h4 style="color:white;">Cadastro de Produtos</h4>
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="row" style="">
                            <div class="col-md-5">
                                <label for="txtProduto" class="form-label">Nome do Produto : <span style="color: #e11b22;"> * </span></label>
                                <input type="text" class="form-control" name="txtProduto" id="txtProduto" maxlength="25">
                            </div>
                            <div class="col-md-6">
                                <label for="txtPreco" class="form-label">Preço : <span style="color:#e11b22;"> * </span></label>
                                <input type="text" class="form-control" name="txtPreco" id="txtPreco" >
                            </div>
                        </div>
                        <div class="row" style="margin-top: 1%;">
                            <!-- <div class="col-md-4" style="    display: flex;flex-direction: column;align-items: center;justify-content: flex-start;flex-wrap: wrap;">
                                <label>Cor Produto</label>
                                <input type="color" id="color-input" />
                                <label for="color-input" id="pseudo-color-input"></label>
                            </div> -->
                            

                            <div class="col-md-3">
                                <label for="numEstoque" class="form-label">Estoque : <span style="color:#e11b22;"> * </span></label>
                                <input type="number" class="form-control" name="numEstoque" id="numEstoque" >
                            </div>

                            <div class="col-md-4">
                            <label for="slcCategoria" class="form-label">Categoria Produto :</label>
                                <select name="slcCategoria" id="slcCategoria" class="form-control" data-live-search="true">
                                    <option value="">Selecione</option>
                                    <option value="Lazer">Lazer</option>
                                    <option value="Higiene">Higiene</option>
                                    <option value="Saude">Saúde</option>
                                    <option value="Alimentacao">Alimentação</option>
                                </select>
                            </div>
                        </div>


                        <div class="row" style="margin-top: 1%;">
                            <div class="col-md-12">
                                <label for="fileProd" class="form-label">Imagem do Produto <span style="color:#e11b22;"> * </span> </label>
                                <input class="form-control" type="file" id="fileProd" name="fileProd">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 1%;">
                            <div class="col-md-12">
                                <label for="txtDescProd" class="form-label">Descrição Produto : <span style="color:#e11b22;"> * </span></label>
                                <textarea class="form-control" placeholder="Insira seu comentario aqui" id="txtDescProd" name="txtDescProd" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 2%;">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-3"><input type="reset" style="background-color:#71ADA5" class="btn" id="btnLimpa" name="btnLimpa" value="Limpar"></div>
                            <div class="col-md-3"><input type="button" style="background-color:#71ADA5" class="btn" onclick="cadastraProd()"id="btnCadastra" name="btnCadastra" value="Cadastrar Produto"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
            <div class="content" style="zoom: 0.8;">
            <div class="panel-heading" style="border-radius: 8px 8px 0px 0px; border: 1px solid #cfcfcf; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);background: #6AB99D">
                <div class="row">
                    
                        <div class="col-md-8">
                            <h3>
                            <i class="bi bi-bag-check" style="color:#fff;"></i>
                             <label style="color:#fff;">Produtos Cadastrados:</label>
                            <span class="badge badge-secondary" style="background-color:#fff; color:var(--base-color); font-size:20px;"><?php echo $row_cnt;?></span></label>
                           </h3>
                        </div>
                    
                    <div class="col-md-4 alinha-botao-direita">
                        <h3><i id="olho2" class="bi bi-eye-fill" onclick="escondertable2()"></i></button></h3>
                    </div>
                </div>
            </div>
            <div class="disable" id="aparecefiltro2">
            <div class="panel-body" style="background-color: #fff; border: 1px solid #cfcfcf; border-radius: 0px 0px 8px 8px; width: 100%!important; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);padding: 20px;">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover table-bordered" style="align:center;font-size: 25px!important; width:100%!important;padding: 15px 0px" id="tbCadastrados">
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
                                                <a href="javascript:void(0);" onClick="removeProd(<?php echo $row['id_prod'];?>);">
                                                    <div class="bi bi-trash hoverAzul" style="color: black; cursor: hand;"></div>
                                                </a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

        </div>
    </form>
</div>
</body>

<script>
   $('.selectpicker').selectpicker();
</script>

<script>
    $('#color-input').on('change', function () {
  $(this)
    .next('#pseudo-color-input')
    .css('background-color', $(this).val());
});
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#tbCadastrados').DataTable({
            "pageLength": 10,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
            "order": [],
            "columnDefs":[{
                "targets"  : 'no-sort',
                "orderable": true,
            }],
            "scrollX": false,
            "language": {
                "zeroRecords": "Nenhuma busca encontrada",
                "search": "Pesquisar _INPUT_"
            },
            "oLanguage": {
                "sLengthMenu": " Exibir _MENU_ Resultados por Página",
                "sInfo": "_TOTAL_ Registros ao Total (_START_ de _END_)",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Proximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast":"Ultimo"
                },
            },
        });
    });
</script>

<script>
    function escondertable() {
        var element = document.getElementById("aparecefiltro");
        element.classList.toggle("enable");
        var element = document.getElementById("olho");
        element.classList.toggle("bi-eye-slash-fill");
        }
</script>

<script>
    function escondertable2() {
        var element = document.getElementById("aparecefiltro2");
        element.classList.toggle("enable");
        var element = document.getElementById("olho2");
        element.classList.toggle("bi-eye-slash-fill");
        }
</script>

<script>
 function removeProd(id_prod){
         Swal.fire({
         title: 'Deseja remover este produto ?',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Sim, remover!',
         cancelButtonText: 'Cancelar'
         }).then((result) => {
         if (result.isConfirmed) {
            $.ajax({
               url:"../ajax/ajaxDeleteProd.php",
               data: JSON.stringify({
                    id_prod: id_prod
                }),
               type:"post",
               contentType: false,
               processData: false,
               beforeSend:function(){
                     
               },
               success: function(retorno){
                $('#tbCadastrados').html(retorno);
                  Swal.fire({
                     icon: 'success',
                     title: 'Produto removido!',
                     text: 'Produto removido com sucesso.',
                     showConfirmButton: false,
                     timer: 2000,
                  })
               },
               error: function(retorno){
                Swal.fire({
                     icon: 'error',
                     title: 'Ops Ocorreu um Erro!',
                     text: 'Não é possivel remover este produto',
                     showConfirmButton: false,
                     timer: 2000,
                  })
               }
            });
          }
         })
      }
</script>

<script>
    $(document).ready(function(){
     $("#txtPreco").maskMoney({
         prefix: "R$ ",
         decimal: ".",
         thousands: ","
     });
});


	function cadastraProd(){

       var mensagem = ''; // cria uma variavel do tipo vazio

       if(document.getElementById('txtProduto').value == ''){
            //mensagem = mensagem+"\n- Nome do Produto";
            mensagem = mensagem+"<p>- Nome do Produto</p>";
       }
        if(document.getElementById('numEstoque').value == ''){
            //mensagem = mensagem+"\n- Estoque ";
            mensagem = mensagem+"<p>- Estoque</p> ";
        }
        if(document.getElementById('txtPreco').value == ''){
            //mensagem = mensagem+"\n- Preço";
            mensagem = mensagem+"<p>- Preço</p>";
        }
        if(document.getElementById('fileProd').value == ''){
            //mensagem = mensagem+"\n- Imagem do Produto";
            mensagem = mensagem+"<p>- Imagem do Produto</p>";
        }
       if(document.getElementById('txtDescProd').value == ''){
            //mensagem = mensagem+"\n- Descrição Produto";
            mensagem = mensagem+"<p>- Descrição Produto</p>";
        }
       if(mensagem != ''){
           //window.alert('== PARA PROSEGUIR, PREENCHA OS SEGUINTES CAMPOS! ==' +mensagem);
           //Swal.fire('Para Prosseguir Preencha os Seguintes campos',mensagem)

           Swal.fire({
            icon: 'error',
            title: 'Para Prosseguir, Preencha os Campos',
            html: "<div class='container' style='font-size: 18;font-family: 'Poppins'>"+ mensagem+'</div>',
            })
       }

        else if(mensagem == ''){
				var s = '';
				var erro = false;

				if(erro){
					$('#divMostraR').html("<div class='alert alert-danger'>"+s+"</div>");
				}else{
					r = confirm('Você tem certeza que deseja cadastrar um novo produto?\n\nLembre de confirmar os dados antes de prosseguir.');
					if(r){
                        document.getElementById('hdnCadastra').value = '1';
                        document.getElementById('cadProd').submit();
					}
				}
			}
		}
			
			
		</script>



</html>