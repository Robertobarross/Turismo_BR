<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo-BR</title>
</head>
<body>

    <style type="text/css">
    body{background-image: url('imagens/img2.jpg');} /* Imagem plano de fundo da página */
    </style>

    <!-- As informações desse formulário serão postadas na parte direita no Index.php -->  
    <div id="post2" align="center"><!-- Inicio da div post2 -->

    <h1 class="titulo">CADASTRAR PONTO TURÍSTICO</h1><!-- Titulo do formulário -->

    <form action="Post1bd.php" method="POST" enctype="multipart/form-data"><!-- Inicio do formulário -->
    <br><input type="text" name="cidade" class="camp" placeholder="Informe o nome da cidade e sigla do estado" require></br><!-- Cidade -->
    <br><input type="text" name="lugar" class="camp" placeholder="Informe o ponto turístico" require></br><!-- Lugar -->
    <br><input type="file" name="imagem" class="camp"></br><!-- Imagem -->
    <br><textarea name="texto" class="cont" placeholder="Informe as atrações do ponto turístico..." maxlength="900" require></textarea></br><!-- Conteúdo -->

    <!-- Botões -->
    <p><input type="submit" value="Postar" class="bt">
    <input type="reset" value="Limpar" class="bt">

    <br><a href="Index.php" ><img src="imagens/seta-esquerda.png"class="seta"></br>


    </form><!-- Fim do formulário -->

    <style type="text/css">
    #post2{width: 40%; height: 490px; border: 2px solid white; border-radius: 10px; margin-top: 80px; margin-left: auto; margin-right: auto; background-color: gray;} /* estilo da div */
    .titulo{font-size: 25px; font-family: Calibri; color: black;} /* Estilo do título */
    .camp{width: 70%; height: 20px; font-size: 16px; color: white; background-image: url('imagens/img2.jpg');} /* estilo dos campos */
    .cont{width: 70%; height: 100px; font-size: 16px; color: white; background-image: url('imagens/img2.jpg');} /* Estilo da caixa de texto */
    .bt{width: 30%; height: 30px; font-size: 20px; font-family: calibri; border-radius: 5px; color: white; background-color: black;} /* Estilo dos botões */
    .bt:hover{background-color: gray;}
    .seta{width: 20%;}
    </style>    
    
    </div><!-- Fim da div post2 -->
    
</body>
</html>