<?php
define('HOST', '168.138.135.85');
define('USUARIO', 'visk');
define('SENHA', 'Trocar12');
define('DB', 'TCC');

 //Creating a connection
 //$conexao = mysqli_connect("168.138.135.85", "visk", "Trocar12", "TCC") or die ('Não foi possivel conectar');
 $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');