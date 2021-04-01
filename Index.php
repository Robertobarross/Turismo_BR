<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo-BR</title>
</head>
<body>

<div id="geral"><!-- Essa div contempla toda a página, div geral -->

    <style type="text/css">
    body{background-image: url('Imagens/img2.jpg');} /* Define o plano de fundo da página */
    </style>

<div id="topo"> <!-- Inicio da div topo -->

    <img src="Imagens/img.png" class="topo"><!-- Imagem do topo -->

    <?php
    include "Formbusc.php";
    ?>
    
    <style type="text/css"> 
    #topo{width: 70%; height: 450px; display: block; margin-left: auto; margin-right: auto; border: 2px solid #ffff00; border-radius: 10px;} /* Estiliza a div topo */
    .topo{display: block;  margin-left: auto; margin-right: auto; width: 100%; height: 450px; border-radius: 10px;} /* Estiliza imagem di topo */
    </style>

</div><!-- Fim da div topo --> 


<div id="postagens"><!-- Inicio da dvi postagens -->

    <h1 class="titulo" align="center">Roteiro de viagens</h1>

    <style type="text/css">
    #postagens{width: 70%; height: 500px; display: block; margin-left: auto; margin-right: auto; border: 3px solid #66ff00; border-radius: 10px; margin-top: 70px; background-color: white;}
    .titulo{font-size: 50px; font-family: script mt; margin-top: 5px;}
    </style>

</div><!-- Fim da div postagens -->

</div><!-- Fim da div geral -->
    
</body>
</html>