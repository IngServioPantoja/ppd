<?php
    include 'conecta.php';
    $bd = conectar();
    $idPrestamo = $_POST['idPrestamo'];
    $cad = "SELECT prestamo.idPrestamo,prestamo.Fecha_Prestamo,prestamo.Cantidad_Prestada,prestamo.Estado_Entrega,articulo.Nombre,usuario.Cedula,usuario.Nombre,articulo.idArticulo from prestamo INNER JOIN articulo ON (prestamo.idArticulo = articulo.idArticulo) INNER JOIN usuario ON (prestamo.idUsuario = usuario.idUsuario) WHERE prestamo.idPrestamo = '$idPrestamo' limit 1";
    $resultado = mysql_query($cad,$bd);
    $arr = mysql_fetch_array($resultado, 2);
?>
<!DOCTYPE html>
<html>
<?php
    include './verificaSesion.php';
    $v = verificar();
    if ($v==0) return;
?>
    <body>
        <form id="formDevolver" style="position: relative;top: 0px;width: auto;height: auto;left: auto;">
            <input type="hidden" name="idPrestamo" value="<?php echo $arr[0]; ?>">
            <input type="hidden" name="idArticulo" value="<?php echo $arr[7]; ?>">
            <fieldset>
                <legend><h4><small>Datos de usuario</small></h4></legend>
                    <div class="form-group" style="overflow:auto;">
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                                <span>Identificación</span>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" name="identificacion" value="<?php echo $arr[5]; ?>" class="form-control" readonly="readonly">
                            </div>
                        </div>
                  </div>
                  <div class="form-group" style="overflow:auto;">
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                                <span>Nombre Completo del Usuario</span>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" name="nombre" value="<?php echo $arr[6]; ?>" class="form-control" readonly="readonly">
                            </div>
                        </div>
                  </div>
                </fieldset>
                <fieldset>
                    <legend><h4><small>Datos de devolución</small></h4></legend>
                    <div class="form-group" style="overflow:auto;">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <span>Articulo</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="articulo" value="<?php echo $arr[4]; ?>" class="form-control" readonly="readonly">
                            </div>
                            <div class="col-xs-2">
                                <span>Fecha</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="date" name="fecha" value="<?php echo date('Y-m-d');?>" class="form-control" readonly="readonly">
                            </div>
                        </div>
                  </div>
                   <div class="form-group" style="overflow:auto;">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <span>Cantidad</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="number" value="<?php echo $arr[2]; ?>" class="form-control" readonly="readonly" name="cantidadDevuelta">
                            </div>
                            <div class="col-xs-2">
                                <span>Estado</span>
                            </div>
                            <div class="col-xs-4">
                                <select name="estadoEntrega" class="form-control">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>   
                                </select>
                            </div>
                        </div>
                  </div>
                   <div class="form-group" style="overflow:auto;">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <span>Multa</span>
                            </div>
                            <div class="col-xs-4">
                                <input type="number" value="0" class="form-control" name="multa" min="0" step="500">
                            </div>
                            <div class="col-xs-6-offset">
                            </div>
                        </div>
                  </div>
                   <div class="form-group" style="overflow:auto;">
                        <div class="col-xs-12">
                            <div class="col-xs-12">
                                <span>Observaciones:</span>
                            </div>
                            <div class="col-xs-12">
                                <textarea class="form-control" name="observaciones" rows="3" required></textarea>
                            </div>
                        </div>
                  </div>
                </fieldset>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="idButtonDevolver">Confirmar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
            </fieldset>
        </form>
        <script type="text/javascript">
            $("#idButtonDevolver").on('click',function(e){
                var prestamo = <?php echo $idPrestamo; ?>;
                if ($("#formDevolver").valid()){
                    $.ajax({
                        url: "uDevolver.php",
                        type: "post",
                        data: $("#formDevolver").serialize(),
                        beforeSend: function(){

                        },
                        success: function(resp){
                            $("#idForm"+prestamo).parent().parent().remove();
                            $("#modalDevolver").modal('hide');
                        }
                    });
                }else
                {
                    alert("Diligencie todos los campos");
                }
            });
        </script>
    </body>
</html>