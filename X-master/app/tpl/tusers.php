<?php 
	include 'head_common.php';
	?>
<body class="bentrar">
<h1>Login</h1>
<form action="/X-master/users/login" method="post">
    <div id="for">
        <div>
            <p>Nombre:</p>
            <input type="text" name="nom">
        </div>

        <div>
            <p>Password:</p>
            <input type="password" name="pass1">
        </div>
    </div>
    <div>
        <p class="Error"></p>
    </div>
    <div id="boton1">
        <input type="submit" name="enviar" value="Entrar" id="entrar">
    </div>
</form>
<a href="/X-master">Salir</a>
<?php
	include 'footer_common.php';

?>

