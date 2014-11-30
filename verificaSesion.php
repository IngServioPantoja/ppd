<?php 
session_start(); 
function verificar()
{
    if (!isset($_SESSION['user'])){
        echo "<h1><p>Sesion no Inicializada</p></h1>";
        echo "<br><h3><a href='index.php'>Volver</a></h3>";
        return 0;       
    }  


    if ($_SESSION['user'] == "" ){
        echo "<p>Sesion Finalizada !!</p>";
        echo "<br><a href='index.php'>Volver</a>";
        return 0;
    }
    return 1;
}
?>


