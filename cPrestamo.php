<?php
   $fechaPrestamo = date('Y-m-d');
   $cantidadPrestada = $_POST["cantidad1"];
   $estadoEntrega = $_POST["lstentrega"];
   $idArticulo = $_POST["lstpresta"];
   $idUsuario = $_POST["usuario"];
  
   
   include("conecta.php");
   $bd = conectar();
   if (!$bd) return;
   $cad = "insert into prestamo (Fecha_Prestamo,Cantidad_Prestada,Estado_Entrega,idArticulo,idUsuario) values ('$fechaPrestamo','$cantidadPrestada','$estadoEntrega','$idArticulo','$idUsuario')";
   $res = mysql_query($cad,$bd);
   
   if (!$res) echo mysql_error();
   $updateArticulo = "update articulo set articulo.cantidad=articulo.cantidad-$cantidadPrestada where articulo.idArticulo = '$idArticulo'";
   $res = mysql_query($updateArticulo,$bd);
   if (!$res) echo mysql_error();
?>
