<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo-BR</title>
</head>
<body>

    <br><a href="#" class="menu-open">MENU</a></br><!-- Botão Do menu -->

    <!-- Aqui começam os códigos que definem o Menu -->
<div class="menu"><!-- Div com os links do menu -->

    <a href="#" class="menu-close">&times;</a>
    <ul>
    <br><li><a href="Formlogin.php" target="_blank" class="link" onclick="alert('')">Login</a></li></br>
    <br><li><a href="#" target="_blank" class="link" onclick="alert('')">Pacotes</a></li></br>
    <br><li><a href="#" target="_blank" class="link" onclick="alert('')">Roteiros</a></li></br>
    <br><li><a href="#" target="_blank" class="link" onclick="alert('')">Viaje com Turismo BR</a></li></br>
    <br><li><a href="Post1.php" target="_blank" class="link" onclick="alert('Postar 1?')">Postar</a></li></br>
    <br><li><a href="Post2.php" target="_blank" class="link" onclick="alert('Postar 2?')">Postagem</a></li></br>
    </ul>

</div><!-- Fim da div links menu -->

    <!-- Arquivo JS já faz parte da deslizagem da barra de menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>

<style type="text/css">/* Arquivo CSS responsável pela configuração da barra de menu */
    /* resetando a fonte */
    body{font-family: 'Roboto', sans-serif;}
 
    /* estilizando o botão abrir menu */
    .menu-open{background: #333333; color: gray; font-size: 15px; font-family: Arial black; text-decoration: none; padding: 5px 20px; margin: 18px; margin-top: 25px; border-radius: 5px; display: inline-block; text-transform: uppercase;}
    .menu-open:hover{background-color: white;}


    /* estilizando o botão fechar menu */
    .menu a.menu-close {padding: 8px 0 4px 23px; color: white; display: block; margin: -30px 0 -10px -20px; font-size: 35px; text-decoration: none;}

    /* Estilizando os links */
    .link{float: left; margin-right: 0px;}
    .link:hover{background-color: gray;}

    /* estilizando o menu em si */
    .menu {overflow: hidden; background: rgba(0,0,0,.95); padding: 40px 0 0 40px; position: fixed; top: 0; right: -290px; height: 100%; z-index: 2; transition: 0.5s; width: 250px;} 

    /* estilizando o menu + ul */
    .menu ul{list-style: none; padding: 0; margin: 0; overflow-y: auto; width: 500px; height: 95%;}

    /* estilizando o menu + ul li + a */
    .menu ul li a {display: block;  padding: 6px 4px 6px 4px; color: white;transition: 0.3s; text-decoration: none; font-size: 20px; font-family: Arial;}
</style>

<!-- Arquivo responsável por fazer deslizar a barra de menu -->
<script type="text/javascript">
$(function () {
    var menu_width = 490;
    var menu = $(".menu");
    var menu_open = $(".menu-open");
    var menu_close = $(".menu-close");
    var overlay = $(".overlay");

    menu_open.click(function (e) {
    e.preventDefault();
    menu.css({"right": "0px"});
    overlay.css({"opacity": "1", "width": "100%"});
 });
 
    menu_close.click(function (e) {
    e.preventDefault();
    menu.css({"right": "-" + menu_width + "px"});
    overlay.css({"opacity": "0", "width": "0"});
 });
});
</script>
<!-- Fim do arquivo responsável por fazer deslizar a barra de menu -->
<!-- Finaliza também os códigos que definem o Menu -->

    
</body>
</html>