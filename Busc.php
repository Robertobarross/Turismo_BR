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
    body {background-image: url("Imagens/img2.jpg");} /* Imagem cor de fundo */
    </style>

<?php // Arquivo de busca no banco de dados e variavéis da conexão //
    @$busc = $_POST['busc'];
    $sql = mysqli_query($link, "SELECT * FROM cadviagem WHERE cidade LIKE '%".$busc."%'");
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

    <!-- Iniciando arquivo da postagem superior -->
    <a class="texto <?php echo "cidade>" .$cidade;?>;">
<?php
    echo "</br></br>";
    echo "<strong>Cidade: </strong>".$cidade;
    echo "<br/><br/>";  
    echo "<strong>Atrativos: </strong>" .$descricao1;
    echo "<br/></br>";
?>
    <br><img src="Postagens/<?php echo ""."/".$foto1;?>"class="imagem">
    <!-- Finalizando arquivo da postagem superior -->
 

    <!-- Iniciando arquivo da postagem inferior -->
    <a class="texto <?php echo "lugar2>" .$lugar2;?>"
<?php
    echo "</br></br>";
    echo "<strong>Lugar: </strong>" .$lugar2; 
    echo "<br/></br>";
    echo "<strong>Atrativos: </strong>" .$descricao2;
    echo "<br/></br>";
?>
    <br><img src="Postagens/<?php echo ""."/".$foto2;?>"class="imagem" align="left"></br> 
    <!-- Finalizando arquivo da postagem inferior -->


    <!-- Botões de navegação -->
    <p><input name="entrar" type="button" id="button4" onclick=location.href='#' value="#" class="bt"/>
    <p><input name="entrar" type="button" id="button4" onclick=location.href='#' value="#" class="bt"/>
    <!-- Link para retornar para página inicial -->
    <p><a href="Index.php" class="link">Voltar para página inicial</a></p>

    <style type="text/css">
    .texto{font-size: 30px; color: white; text-align: justify;}
    .imagem{width: 50%;}
    </style>

</div>
<!-- Fim da div bucar -->
    
</body>
</html>