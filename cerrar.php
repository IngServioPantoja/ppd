<?php 
    session_start();
    $_SESSION["user"] = "";
    session_destroy();
    echo "Sesion abandonada <br>";
    echo "<a href='index.php'>Volver</a>";
?>