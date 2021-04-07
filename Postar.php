<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo-BR</title>
</head>
<body>


<!-- O conteúdo a baixo faz a consulta bd, para ser exibido no Index.php conteúdo --> 
<div id="Postar_left"><!-- Inicio da div postar --> 

<?php  
    include 'connect.php'; // Faz a coneção com o banco de dados //

$sql = mysqli_query($link, "SELECT * FROM postagens ORDER BY cidade DESC");// faz a consulta na tabela do bd //
	while($line = mysqli_fetch_array($sql)){ // Variáveis da coneção //
	$cidade = $line['cidade'];
	$lugar = $line['lugar'];
	$imagem = $line['imagem'];
	$texto = $line['texto']; // Fim das variáveis //
?>
    <br><h1 class="cidade"><?php echo $cidade;?></h1><!-- Mostrar cidade -->
    <h1 class="lugar"><?php echo $lugar;?><!-- Mostrar lugar -->
    <img src="postagens/<?php echo ""."/".$imagem;?>"class="imagem"><!-- Mostrar imagem -->
    <p class="texto"><?php echo $texto;?></p><!-- Mostrar texto -->
    <a href="#" class="link">Adquirir pacote viagem</a>

    <style type="text/css"> /* Estilização dos campos com css */
    #Postar_left{width: 50%; height: auto; float: left;}/* Estilo da div */
    .cidade{font-size: 25px; font-family: Arial; color: #666666; margin: 20px;}/* Estilo do nome cidade */
    .lugar{font-size: 20px; font-family: Arial; color: #666666; margin: 20px;}/* Estilo do nome lugar */
    .imagem{width: 100%; margin-top: 8px; height: 0%; padding: 0px;}/* Estilo da imagem */
    .texto{font-size: 12px; font-family: Arial; color: #666666; margin-top: 30px; text-align: justify;}/* Texto */
    .link{font-size: 12px; font-family: Arial; text-decoration: none; color: black;}/* Link */
    </style>

<?php  

} 

?>

</div><!-- Fim da div postar --> 


</body>
</html>