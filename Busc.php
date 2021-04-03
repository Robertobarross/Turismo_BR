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
<div id="buscar" align="center">
    <style type="text/css">/* Configuração dos intens da div */
    #buscar{width: 80%; height: 2000px; border: 3px solid #ffff00; margin-left: auto; margin-right: auto;}
    body {background-image: url("Imagens/img2.jpg");} /* Imagem cor de fundo */
    </style>

<?php // Arquivo de busca no banco de dados e variavéis da conexão //
    @$buscar=$_POST['buscar'];
    $sql = mysqli_query($link, "SELECT * FROM cadviagem WHERE cidade LIKE '%".$buscar."%'");
    $row = mysqli_num_rows($sql);
    if($row > 0) {
    while($linha = mysqli_fetch_array($sql)) { // Iniciando as variáveis //
    $cidade = $linha['cidade'];
    $foto1 = $linha['foto1'];
    $descricao1 = $linha['descricao1'];
    $lugar2 = $linha['lugar2'];
    $foto2 = $linha['foto2'];
    $descricao2 = $linha['descricao2'];
    } // Finalizando as variavéis //
    }
?>

    <p><h1 class="texto"><?php echo @$cidade;?> <!-- Titulo -->
    <P><h1 class="texto"><?php echo @$descricao1;?> <!-- Informação -->
    <p><img src="postagens/<?php echo ""."/".@$foto1;?>"class="imagem"> <!-- 1ª imagem -->
    <p><h1 class="texto"><?php echo @$lugar2;?> <!-- Titulo -->
    <p><h1 class="texto"><?php echo @$descricao2;?> <!-- Informação -->
    <p><img src="postagens/<?php echo ""."/".@$foto2;?>"class="imagem"> <!-- 2ª imagem -->

    <!-- Botões de navegação -->
    <p><input name="entrar" type="button" id="button4" onclick=location.href='#' value="Comprar viagem" class="bt"/>
    <p><input name="entrar" type="button" id="button4" onclick=location.href='Index.php' value="Voltar para página inicial" class="bt"/>

    <style type="text/css">
    .texto{font-size: 20px; font-family: Arial; color: white; text-align: justify; margin-top: 50px; margin-left: 120px; margin-right: 130px;} /* Estilo do texto */
    .imagem{width: 100%; margin-left: auto; margin-right: auto;} /* Estilo da imagem */
    .bt{width: 230px; height: 30px; margin-left: 0px; font-size: 20px; font-family: Arial;}
    .bt:hover{background-color: #ffff00;}
    </style>

</div>
<!-- Fim da div bucar -->


</body>
</html>