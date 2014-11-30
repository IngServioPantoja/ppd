<?php
    include 'conecta.php';
    $bd = conectar();
    $idUsuario = $_POST['idUsuario'];
    $cad = "SELECT u.* FROM usuario u where u.idUsuario='$idUsuario' limit 1";
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
        <form id="formUModificar" style="position: relative;top: 0px;width: auto;height: auto;left: auto;">
            <input type="hidden" name="idUsuario" value="<?php echo $arr[0]; ?>">
            <fieldset>
                <legend><h2><small>Datos de usuario</small></h4></legend>
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
        <script type="text/javascript">
            $("#idButtonModificar").on('click',function(e){
                var usuario = <?php echo $idUsuario; ?>;
                if ($("#formUModificar").valid()){
                    $.ajax({
                        url: "uUsuario.php",
                        type: "post",
                        data: $("#formUModificar").serialize(),
                        beforeSend: function(){

                        },
                        success: function(resp){
                            $("#divres").load("consultarusu.php");
                            $("#modalUsuario").modal('hide');
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
