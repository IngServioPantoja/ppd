<?php
   $idim = $_POST["idimplemento"];
   $nom = $_POST["nomarticulo"];
   $can = $_POST["cantidad"];
   $tip = $_POST["tip"];
   $dispo = $_POST["dispo"];
  
   
   $cad = "insert into articulo values ('$idim','$nom',$can,'$tip','$dispo')";
   include("conecta.php");
   $bd = conectar();
   if (!$bd) return;
   
   $res = mysql_query($cad,$bd);
   if (!$res) echo "<br><br><br><br>El articulo no existe<br>ERROR: " . mysql_error();
   else echo "<br><br><br><br>Registro adicionado con exito";
?>
