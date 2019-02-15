<?php

include 'head_common.php';
echo "<h1>Bienvenido ".$_SESSION['user']."</h1>";
?>
    <body >

    <h2>Que accion deseas realizar??</h2>
    <div>
        <a href="/X-master/add">Añadir Tarea</a>
        <a href="/X-master/delete">Borrar Tarea</a>
        <a href="/X-master/modificar">Modificar Tarea</a>
      
        
    </div>
    <div>
        <p><a id="/X-master" href="/X-master">Cerrar
                sesión</a></p>

    </div>

    </body>
<?php
include 'footer_common.php';

?>