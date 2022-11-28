<?php
$Servidor = "localhost";
$User = "root";
$Senha = "";
$dbname = "pi3";

$conexao = mysqli_connect($Servidor, $User, $Senha) or die ("Falha ao se conectar ao Banco de Dados!" . $conexao->error);

mysqli_select_db($conexao, $dbname);

?>