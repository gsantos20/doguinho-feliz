<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
// include_once('conexao.php');
require_once '/home/ubuntu/vendor/autoload.php';

    if(isset($_POST['hdnValida']) && $_POST['hdnValida'] == 1){?>
        

		Iniciado
        <br>
        <br>
        <br>

<?php

$baseCaminho = "https://doguinhofeliz.mytcc.com.br/Foto/Produtos/teste/";
$uploaddir = '/var/www/doguinhofeliz.mytcc.com.br/Foto/Produtos/teste/';
$nomeArq = basename($_FILES['campoArquivo']['name']);
$uploadfile = $uploaddir . $nomeArq;
$fileNameNoExtension = preg_replace("/\.[^.]+$/", "", $nomeArq);


if (is_dir($uploaddir) && is_writable($uploaddir)) {
    // do upload logic here
} else {
    echo 'Upload directory is not writable, or does not exist.';
}

if (move_uploaded_file($_FILES['campoArquivo']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";

$client = new GuzzleHttp\Client();
$res = $client->post('https://api.remove.bg/v1.0/removebg', [
    'multipart' => [
        [
            'name'     => 'image_url',
            'contents' => $baseCaminho . $nomeArq,
        ],
        [
            'name'     => 'size',
            'contents' => 'auto'
        ]
    ],
    'headers' => [
        'X-Api-Key' => 'rVR1fF1aYw4K7GKYM1kzbF1o'
    ]
]);

$fp = fopen("/var/www/doguinhofeliz.mytcc.com.br/Foto/Produtos/teste/$fileNameNoExtension.png", "wb");

var_dump($res->getBody());
 fwrite($fp, $res->getBody());
fclose($fp);

unlink("$uploadfile");


/*
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://background-removal.p.rapidapi.com/remove",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "image_url=https%3A%2F%2Fdoguinhofeliz.mytcc.com.br%2FFoto%2FProdutos%2Fteste%2Fsubstr($nomeArq2, 0, strrpos($nomeArq2, ".").png&output_format=url",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: background-removal.p.rapidapi.com",
		"X-RapidAPI-Key: 6290ea98b7mshac9e6f353cf6ad0p1e73cdjsnddd572d22a96",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = (string)curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$result = json_decode($response, true);

  var_dump($result['response']['image_url']);

  copy($result['response']['image_url'], '/var/www/doguinhofeliz.mytcc.com.br/Foto/Produtos/teste/'. $nomeArq);
  
}*/

} else {
    echo "Possível ataque de upload de arquivo!". $_FILES['campoArquivo']['error'];\n;
}


?>

        <br>
		Finalizado
    <?php };?>

		<form name="formArquivo" id="formArquivo" enctype="multipart/form-data" method="post" >
            <input type="hidden" name="hdnValida" id="hdnValida" value="0">
            <input type="file" name="campoArquivo" id="campoArquivo" ><br><br>

            <p id="b64"></p>
            <img id="img" height="150">
            <button type="button" onclick="envia()">Enviar</button>
        </form>

    <script>

        function readFile() {
          
          if (!this.files || !this.files[0]) return;
            
          const FR = new FileReader();
            
          FR.addEventListener("load", function(evt) {
            document.querySelector("#img").src         = evt.target.result;
            document.querySelector("#b64").textContent = evt.target.result;
          }); 
            
          FR.readAsDataURL(this.files[0]);
          
        }

        document.querySelector("#campoArquivo").addEventListener("change", readFile);

        function envia(){
            document.getElementById('hdnValida').value = 1;

            document.getElementById('formArquivo').submit();
        }
    </script>
