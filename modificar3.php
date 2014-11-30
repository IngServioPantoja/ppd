<?php
$xusu= $_POST["txt"];
$xnom= $_POST["txtnom"];
$xoc= $_POST["txtoc"];
$xced= $_POST["txtced"];
$xtel= $_POST["txttel"];
$xdir= $_POST["txtdir"];
$xocu= $_POST["oculto"];

$cad = "update prestamos set idUsuario='$xusu', Nombre='$xnom', Ocupacion='$xoc', Cedula='$xced', Telefono='$xtel', Dirección='$xdir'
        where idUsuario = '$xocu'";

include ("conecta.php");
$bd = conectar();
if (!$bd)return;
$res = mysql_query($cad, $bd);
if(!$res) echo "<h3> Error </h3>" . mysql_error();
else echo "<h3> Informacion </h3> Registro Modificado <br>";
mysql_close($bd);
echo "<hr> <a href='consultarusu.php'>Volver</a>";
?>

