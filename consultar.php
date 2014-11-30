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
        <?php
            include 'conecta.php';
            $bd = conectar();
            if (!$bd) return;
            $cad = "select * from articulo";
            $res = mysql_query($cad,$bd);
        ?> 
        <table id="idTablaImplementos" class="display" cellspacing="0" width="100%">
            <thead>
                <tr> 
                    <th>Nombre Artículo</th> 
                    <th>Cantidad</th> 
                    <th>Tipo</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                </tr>  
            </thead>
            <tfoot>
                <tr> 
                    <th>Nombre Artículo</th> 
                    <th>Cantidad</th> 
                    <th>Tipo</th>
                    <th>Disponibilidad</th>
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
                    <th>
                        <form id="idForm<?php echo $arr[0]; ?>" style="position: relative;top: 0px;width: auto;height: auto;left: auto;">
                            <input type="button" class="buttonImplemento" idImplemento="<?php echo $arr[0]; ?>" value="Modificar">
                            <input type="hidden" value="<?php echo $arr[0]; ?>" name="idImplemento">
                        </form>
                    </th>
                </tr>
                <?php
                }
                mysql_close($bd);
                ?>                
            </tbody>
       </table>
       <div class="modal fade" id="modalIModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modificar implemento</h4>
              </div>
              <div class="modal-body" id="idModalIModificarBody" style="overflow:auto;">
                <form id="formUModificar" style="position: relative;top: 0px;width: auto;height: auto;left: auto;">
                    <input type="hidden" name="idUsuario" value="<?php echo $arr[0]; ?>">
                    <fieldset>
                        <legend><h2><small>Datos del implemento</small></h4></legend>
                            <div class="form-group" style="overflow:auto;">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span>Identificación</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" name="cedula" pattern="[0-9]+" value="<?php echo $arr[3]; ?>" class="form-control" required>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group" style="overflow:auto;">
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <span>Nombre Completo</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" name="nombre" value="<?php echo $arr[1]; ?>" class="form-control" required>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group" style="overflow:auto;">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span>Ocupación</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" name="ocupacion" value="<?php echo $arr[2]; ?>" class="form-control" required>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group" style="overflow:auto;">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span>Telefono</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" name="telefono" pattern="[0-9]+" value="<?php echo $arr[4]; ?>" class="form-control" required>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group" style="overflow:auto;">
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <span>Dirección</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" name="direccion" value="<?php echo $arr[5]; ?>" class="form-control" required>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group" style="overflow:auto;">
                                <div class="col-xs-12">
                                    <div class="col-xs-4">
                                        <span>Estado</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <select name="estado" class="form-control" required>
                                            <option value='Activo' <?php if($arr[6]=="Activo"){echo "Selected";} ?>>Activo</option>
                                            <option value='Inactivo' <?php if($arr[6]=="Inactivo"){echo "Selected";} ?> >Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                          </div>
                        </fieldset>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-praga bg-primary" id="idButtonModificar">Confirmar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                    </fieldset>
                </form>
            </div>
          </div>
        </div>
       <script>
            $(document).ready(function(){
                $(".buttonImplemento").on('click',function(e){
                    $("#modalIModificar").modal('show');



                   /* var formulario = $(this).attr('idUsuario');
                    $.ajax({
                        url: "modalIModificar.php",
                        type: "post",
                        data: $("#idForm"+formulario).serialize(),
                        beforeSend: function(){
                        },
                        success: function(respuesta){
                            $("#idmodalUsuarioBody").html(respuesta);
                            $("#modalUsuario").modal('show');
                        }
                    });
*/
                });
                $('#idTablaImplementos').dataTable( {
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
