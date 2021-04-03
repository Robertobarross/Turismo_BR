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




<div id="postagens"><!-- Inicio da div postagens -->

    <h1 class="titulo" align="center">Roteiro de viagens</h1><!-- Titulo da pag postagens --> 

    <?php
    include "Postar.php"; // Postagens lado esquerdo //
    include "PostarII.php"; // Postagens lado direito //
    ?>

    <style type="text/css">
    #postagens{width: 70%; height: 2000px; display: block; margin-left: auto; margin-right: auto; border: 3px solid #66ff00; border-radius: 10px; margin-top: 70px; background-color: white;} /* Estilo da div postagens */
    .titulo{font-size: 50px; font-family: script mt; margin-top: 5px; color: #009900;} /* Estilo do titulo */
    </style>

</div><!-- Fim da div postagens -->




<div id="rodapé" align="center">

         <!-- Imagens redes sociais -->                  <!-- Links redes sociais -->
    <img src="imagens/facebook.png" class="logo"><a href="https://pt-br.facebook.com/" class="link"> Turismo Brasil</a>
    <img src="imagens/instagram.png" class="logo"><a href="https://www.instagram.com/" class="link"> @TurismoBr</a>
    <img src="imagens/linkedin.png" class="logo"><a href="https://br.linkedin.com/" class="link"> Turismo_br</a>
    <img src="imagens/whatsapp.png" class="logo"><a href="https://web.whatsapp.com/" class="link"> (11)35154-0020</a>

    <!-- Direitos reservados -->
    <br><h1 class="direitos">&COPY; Copyright - Turismo Brasil - 2021 - Todos os direitos reservados.</h1>
      
    <style type="text/css">
    #rodapé{width: 70%; height: 200px; border: 3px solid #ffff00; border-radius: 10px; margin-top: 20px; margin-left: auto; margin-right: auto; background-color: #0033ff;} /* Estilo da div rodapé */
    .logo{width: 50px; margin-top: 20px;} /* Estilo das imagens redes sociais  */
    .logo:hover{background-color: white;} /* Mudar cor quando passar o mouse */
    .direitos{font-size: 13px; font-family: Arial; margin-top: 80px;} /* Estilo do texto direitos reservados */
    </style>

</div>



</div><!-- Fim da div geral -->
    
</body>
</html>