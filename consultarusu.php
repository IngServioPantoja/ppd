<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
        <title></title>
    </head>
        <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
        ?>
    <body>
        <fieldset style="margin-top: 50px;height: 380px;position: relative;">
            <legend>Usuarios</legend>
            <div id="frmpres" style="width: auto;height: auto;">
                 <?php
                    include 'conecta.php';
                    $bd = conectar();
                    if (!$bd) return;
                    $cad = "select * from usuario";
                    $res = mysql_query($cad,$bd);
                ?> 
                <table id="tabla2" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr> 
                            <th>Nombre Usuario</th> 
                            <th>Ocupación</th> 
                            <th>Cédula</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr> 
                    </thead>
                    <tfoot>
                        <tr> 
                            <th>Nombre Usuario</th> 
                            <th>Ocupación</th> 
                            <th>Cédula</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr> 
                    </tfoot>
                    <tbody>
                        <?php
                            while($arr = mysql_fetch_array($res, 2)){
                        ?>
                        <tr>
                            <th><?php echo $arr[1];?></th>
                            <th><?php echo $arr[2];?></th>
                            <th><?php echo $arr[3];?></th>
                            <th><?php echo $arr[4];?></th>
                            <th><?php echo $arr[5];?></th>
                            <th><?php echo $arr[6];?></th>
                            <th>
                                <form id="idForm<?php echo $arr[0]; ?>" style="position: relative;top: 0px;width: auto;height: auto;left: auto;margin:0px">
                                    <input type="button" class="buttonUsuario btn-praga" idUsuario="<?php echo $arr[0]; ?>" value="Modificar">
                                    <input type="hidden" value="<?php echo $arr[0]; ?>" name="idUsuario">
                                </form>
                            </th>
                        </tr>
                        <?php
                            }
                            mysql_close($bd);
                        ?> 
                    </tbody> 
                </table>
            </div>
        </fieldset>
        <div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-praga">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:#fff;">Modificar usuario</h4>
              </div>
              <div class="modal-body" id="idmodalUsuarioBody" style="overflow:auto;">
            </div>
          </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".buttonUsuario").on('click',function(e){
                    var formulario = $(this).attr('idUsuario');
                    $.ajax({
                        url: "modalUModificar.php",
                        type: "post",
                        data: $("#idForm"+formulario).serialize(),
                        beforeSend: function(){
                        },
                        success: function(respuesta){
                            $("#idmodalUsuarioBody").html(respuesta);
                            $("#modalUsuario").modal('show');
                        }
                    });
                });
                $('#tabla2').dataTable( {
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
