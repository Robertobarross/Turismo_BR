<?php
// O Include a baixo faz a conexão com o bd //
include 'connect.php';

// Variáveis que serão preenchidas no bd //
$cidade = $_POST['cidade']??'';
$lugar = $_POST['lugar']??'';
$imagem = $_FILES['imagem']['type']??'';
$imagem = $_FILES['imagem']['name']??'';
$texto = $_POST['texto']??'';

// Link responsável pela postagem no bd //
mysqli_query($link, "INSERT INTO postagensII(cidade,lugar,imagem,texto)VALUES('$cidade','$lugar','$imagem','$texto')");
header('location:Post2.php');

?>