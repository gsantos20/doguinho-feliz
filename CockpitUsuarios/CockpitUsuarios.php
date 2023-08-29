<?php
session_start();
error_reporting(E_ALL);
require_once('../conexao.php');

$query = "select * from Usuarios where 1=1 order by email asc";

$result = mysqli_query($conexao, $query);

 $row = mysqli_fetch_array($result);

$row_cnt = mysqli_num_rows($result);

?>



<!DOCTYPE html>
<html lang="pt-br">





<head>
<?php require($_SERVER['DOCUMENT_ROOT']. '/links.php');?>
</head>

<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/topmenu2.php');
?>

<style>
    .hoverAzul:hover{
        color: blue!important;
        transition: all .3s ease;
        transform: scale(1.23);
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
</style>

<body>
    <main class="container" style="zoom: 0.95;margin-top: 1rem;">
        <div class="content">
            <div class="panel-heading" style="border-radius: 8px 8px 0px 0px; border: 1px solid #cfcfcf; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);background: var(--base-color);">
                <div class="row">
                    
                        <div class="col-md-8">
                            <h3>
                            <i class="bi bi-person-check-fill" style="color:#fff;"></i>
                             <label style="color:#fff;">Usuários Cadastrados:</label>
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
                        <table class="table table-striped table-hover table-bordered" style="align:center, font-size: 25px!important; width:100%!important;padding: 15px 0px" id="tbCadastrados">
                            <thead>
                                <tr align="center" style="font-size: 12px; background-color:#71ADA5; color: black;">
                                    <td><center><b><div class="translateMult en">Email</div></b></center></td>
                                    <td><center><b><div class="translateMult pt-br">Nome de Usuário</div></b></center></td>
                                    <!-- <td><center><b><div class="translateMult pt-br">Status Perfil</div></b></center></td> -->
                                    <td><center><b><div class="translateMult pt-br">Tipo de Perfil</div></b></center></td>
                                    <!-- <td><center><b><div class="translateMult pt-br">Editar</div></b></center></td> -->
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    while($row2 = $result->fetch_assoc()){
                                    ?>
                                    <tr align="center" style="font-size: 12px; background-color:white">
                                        <td><center><?php echo $row2['email'];?></center></td>
                                        <td><center><?php echo $row2['first_name'] . " ".  $row2['last_name']?></center></td>
                                        <!--
                                        <td>
                                            <center>
                                            <?php 
                                            /*if($row2['status'] == 0){
                                                    echo "Ativo";
                                                }else{
                                                    echo "Bloqueado";
                                                }*/
                                            ?>
                                            </center>
                                        </td>-->
                                        <td><center>
                                            <?php 
                                                if($row2['nu_perfil_usuario'] == 1){
                                                    echo "Administrador";
                                                }else{
                                                    echo "Cliente";
                                                }
                                            ?>
                                            </center></td>
                                        <!-- <td style="font-size: 16px;">
                                            <center>
                                                <a href="javascript:void(0);" onClick="PassaID(#id_user#);">
                                                    <div class="bi bi-pencil-fill hoverAzul" style="color: black; cursor: hand;"></div>
                                                </a>
                                            </center>
                                        </td> -->
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
        <br><br><br><br>
	</main>
</body>
<cfinclude  template="../footer.cfm">
</html>


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
  function PassaID(id){
    console.log(id)
    window.location.href='../seguranca/EditaUsuario.cfm?ID_USER='+id
  }
</script>