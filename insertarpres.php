<?php
$xarti= $_POST["lstpresta"];
$xcan = $_POST["cantidad1"];
$xfec= $_POST["fecpre"];
$xentre= $_POST["lstentrega"];
$xidar = $_POST["txtced"];


$cad = "insert into prestamo values ('$xfec','$xcan',$xentre)";
   include("conecta.php");
   $bd = conectar();
   if (!$bd) return;
   
   $res = mysql_query($cad,$bd);
   if (!$res) echo "<br><br><br><br>El articulo no existe<br>ERROR: " . mysql_error();
   else echo "<br><br><br><br>Registro adicionado con exito";
?>

