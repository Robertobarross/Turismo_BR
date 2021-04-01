<?php
include "connect.php"; // Arquivo para conexão com o banco de dados //
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo-BR</title>
</head>
<body>

<!-- Inicio da div bucar -->
<div id="busc" align="center">
    <style type="text/css">/* Configuração dos intens da div */
    body {background-image: url("imagens/img2.jpg");} /* Imagem cor de fundo */
    </style>

<?php // Arquivo de busca no banco de dados e variavéis da conexão //
    $busc=$_POST['busc'];
    $sql = mysqli_query($link, "SELECT * FROM cadviagem WHERE cidade LIKE '%".$busc."%'");
    $row = mysqli_num_rows($sql);
    if($row > 0) {
    while($linha = mysqli_fetch_array($sql)) {
    @$foto1 = $linha['foto1'];
    $valor = $linha['valor'];
    $produto = $linha['produto'];

    echo "<br/><br/>";
    echo "<strong>Produto: </strong>".$produto;
    echo "<br/><br/>";
    echo "<strong>Valor: </strong>".$valor;
    echo "<br/><br/>";       
    }
    }
?>
    <!-- Carrega a imagem da pasta -->
    <br><img src="Imagens/<?php echo "post"."/".@$foto1;?>"class="#"> 
    <!-- Botões de navegação -->
    <p><input name="entrar" type="button" id="button4" onclick=location.href='#' value="#" class="bt"/>
    <p><input name="entrar" type="button" id="button4" onclick=location.href='#' value="#" class="bt"/>
    <!-- Link para retornar para página inicial -->
    <p><a href="Index.php" class="link">Voltar para página inicial</a></p>

</div>
<!-- Fim da div bucar -->
    
</body>
</html>