<?php
 
   $t1 = $_POST["t1"];
   $t2 = $_POST["t2"];
   $t3 = $_POST["t3"];
   $t4 = $_POST["t4"];
   $t5 = $_POST["t5"];
   $ocu = $_POST["ocu"];
   $cad = "insert into usuario values ('$t1','$t2','$ocu','$t3','$t4','$t5')";
   include("conecta.php");
   $bd = conectar();
   if (!$bd) return;
   
   $res = mysql_query($cad,$bd);
   if (!$res) echo "<br><br><br><br>El articulo no existe<br>ERROR: " . mysql_error();
   else echo "<br><br><br><br>Registro adicionado con exito";
?>