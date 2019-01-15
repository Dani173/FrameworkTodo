<?php
include 'head_common.php';
?>
    <body class="bregistrar">
<h1>Registrarse</h1>
<form action="/X-master/reg/reg2" method="post">

    <div id="div1">
        <div>
            <p>Nombre: </p><input type="text" name="nom">
        </div>
        <div>
            <p>Password: </p><input type="password" name="pass1">
        </div>
        <div>
            <p>Repeat:</p> <input type="password" name="pass2">
        </div>
    </div>
    <div id="boton1">
        <input type="submit" name="enviar" value="Registrar" id="entrar">
    </div>

</form>
<a href="/X-master">Salir</a>
<?php
include 'footer_common.php';
?>