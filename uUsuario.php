<?php
   $id = $_POST["idUsuario"];
   $cedula = $_POST["cedula"];
   $nombre = $_POST["nombre"];
   $ocupacion = $_POST["ocupacion"];
   $telefono = $_POST["telefono"];
   $direccion = $_POST["direccion"];
   $estado = $_POST["estado"];
  
   include("conecta.php");
   $bd = conectar();
   if (!$bd) return;
   $updateUsuario = "update usuario set usuario.cedula='$cedula',usuario.nombre='$nombre',usuario.ocupacion='$ocupacion',usuario.telefono='$telefono',usuario.direccion='$direccion',usuario.estado='$estado' where usuario.idUsuario = '$id'";
   $res = mysql_query($updateUsuario,$bd);
   if (!$res) echo mysql_error();
?>
