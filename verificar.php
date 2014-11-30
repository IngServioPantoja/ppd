<?php
    session_start();
    include ("conecta.php");
    $bd = conectar();
   
    if (!$bd) return;
    $usu = $_POST["username"];
    $pas = $_POST["password"];
    
    $cad = "select count(*) from administrador where login = '$usu' and contrasena = ('$pas')";
    $res = mysql_query($cad, $bd);
    $arr = mysql_fetch_array($res,2);
    
    if ($arr[0]==0) echo "0";
    else {
        
        echo "1";
        echo $_SESSION["user"]=$usu;
    }
    mysql_close($bd);
?>

