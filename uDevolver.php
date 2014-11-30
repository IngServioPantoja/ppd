<?php
   $fechaDevolucion = date('Y-m-d');
   $cantidadDevuelta = $_POST["cantidadDevuelta"];
   $estadoEntrega = $_POST["estadoEntrega"];
   $idPrestamo = $_POST["idPrestamo"];
   $idArticulo = $_POST["idArticulo"];
   $observaciones = $_POST["observaciones"];
   $multa = $_POST["multa"];
  
   
   include("conecta.php");
   $bd = conectar();
   if (!$bd) return;
   $cad = "update prestamo set Fecha_Devolucion = '$fechaDevolucion',Cantidad_Devuelta = '$cantidadDevuelta',Observacion = '$observaciones',Estado_Entrega = '$estadoEntrega',Multa = '$multa',estado ='Devuelto' where prestamo.idPrestamo='$idPrestamo' ";
   $res = mysql_query($cad,$bd);
   
   if (!$res) echo mysql_error();
   $updateArticulo = "update articulo set articulo.cantidad=articulo.cantidad+$cantidadDevuelta where articulo.idArticulo = '$idArticulo'";
   $res = mysql_query($updateArticulo,$bd);
   if (!$res) echo mysql_error();
?>
