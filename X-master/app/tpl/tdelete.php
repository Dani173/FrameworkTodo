<?php
include 'head_common.php';
?>

    <h1>BORRAR TAREAS</h1>

    <form action="/X-master/delete/taskdelete" method="post">
        <div id="divbasico">
            <input type="text" name="idborrar" placeholder="ID Tarea A Borrar" />
            <input type="submit" value="Borrar" />
        </div>

    </form>
    <a id="Exit" href="/X-master/panel">Exit</a>
<?php
include 'footer_common.php';
?>