<!DOCTYPE html>
<html>
    <head>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>

        <fieldset style="overflow: auto;margin-top: 50px;height: 380px;position: relative;width: 800px;">
            <legend>Prestamos</legend>
                <div id="frmpres" style="width: auto;height: auto;">
                    <?php
                        include 'conecta.php';
                        $bd = conectar();
                        $cad = "SELECT prestamo.idPrestamo,prestamo.Fecha_Prestamo,prestamo.Cantidad_Prestada,prestamo.Estado_Entrega,articulo.Nombre,usuario.Nombre from prestamo INNER JOIN articulo ON (prestamo.idArticulo = articulo.idArticulo) INNER JOIN usuario ON (prestamo.idUsuario = usuario.idUsuario) WHERE prestamo.estado = 'Prestado'";
                        $resultado = mysql_query($cad,$bd);
                    ?>  
                    <br>
                    <br>
                    <table id="idTablaDevoluciones" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Fecha Prestamos</th>
                                <th>Usuario</th>
                                <th>Articulo</th>
                                <th>Cantidad prestada</th>
                                <th>Estado Entrega</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                 

                        <tbody>
                            <?php
                            $número_filas = mysql_num_rows($resultado);
                            if($número_filas>0)
                            {    
                                while($arr = mysql_fetch_array($resultado, 2)){
                            ?>
                            <tr>
                                <th><?php echo $arr[1]; ?></th>
                                <th><?php echo $arr[5]; ?></th>
                                <th><?php echo $arr[4]; ?></th>
                                <th><?php echo $arr[2]; ?></th>
                                <th><?php echo $arr[3]; ?></th>
                                <th>
                                    <form id="idForm<?php echo $arr[0]; ?>" style="position: relative;top: 0px;width: auto;height: auto;left: auto;">
                                        <input type="button" class="buttonDevolucion" idDevolucion="<?php echo $arr[0]; ?>" value="Devolver">
                                        <input type="hidden" value="<?php echo $arr[0]; ?>" name="idPrestamo">
                                    </form>
                                </th>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php mysql_close($bd); ?>
                </div>
        </fieldset>
        <div class="modal fade" id="modalDevolver" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Devolver elemento</h4>
              </div>
              <div class="modal-body" id="idModalDevolverBody" style="overflow:auto;">
            </div>
          </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".buttonDevolucion").on('click',function(e){
                    var lolaso = $(this).attr('idDevolucion');
                    $.ajax({
                        url: "modalDevolver.php",
                        type: "post",
                        data: $("#idForm"+lolaso).serialize(),
                        beforeSend: function(){
                        },
                        success: function(respuesta){
                            $("#idModalDevolverBody").html(respuesta);
                            $("#modalDevolver").modal('show');
                        }
                    });
                });
                $('#idTablaDevoluciones').DataTable( {
                    "dom": '<"top"f>rlt<"bottom"p><"clear">',
                    "oLanguage": {
                    "sSearch": "Busqueda",
                    "sLengthMenu": '_MENU_',
                    "sInfoEmpty": "No se han encontrado registros",
                    "sZeroRecords": "No se han encontrado registros"
                    },
                } );
            });
        </script>
    </body>
</html>