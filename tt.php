<!DOCTYPE html>
<html>
    <head>
        <title>Crear</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/jquery-2.1.1.js"></script>
         <script src="js/script.js"></script>
         <script src="js/jquery.validate.js"></script>
        <script src="js/micodigo.js"></script>
        <script src="js/micodigo2.js"></script>
    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>

        <form id="frmpres" action="guardarPres.php" method="post">
 <?php
    
    include 'conecta.php';
    $bd = conectar();
    if (!$bd) return;
    $x = $_POST["cod"];
    $cad = "select * from usuario where idUsuario = '$x'" ;
    $res = mysql_query($cad,$bd);
    $ban=0;
    while($arr = mysql_fetch_array($res, 2)){
        echo "<h3>Datos del usuario</h3>";
        echo "<label>Cedula: </label><input type='text' name='txtced' id='txtced' value= '$arr[3]' readonly class='required'> <br>";
        echo "<b>Nombre:</b> $arr[1] <br>";
        echo "<b>Telefono:</b> $arr[4] <br>";
        echo "<b>Dirección:</b> $arr[5] <br>";
        $ban=1;
    }
    mysql_close($bd);
    if ($ban==0) {
        echo "<h3>Usuario no Existe</h3>";
        return;
    }
?>  

  
    <br>
      
            
        <br>
        <label>Artículo</label><br>
        <input type="hidden" value="<?php echo $x; ?>" name="usuario">
        <select name="lstpresta" id="lstpresta" >
        <?php
                
                $bd = conectar();
                if (!$bd) return;
                $cad = "select * from articulo where articulo.cantidad>0";
                $res = mysql_query($cad,$bd);
                while($arr = mysql_fetch_array($res, 2)){
                ?>
                <option value='<?php echo $arr[0];?>' cantidad="<?php echo $arr[2]; ?>"><?php echo $arr[1]; ?></option>;
                <?php
                }
                mysql_close($bd);
            ?>  
        
        </select>
        <br>
        <label>Cantidad</label><br>
        <input type="number" min="1" value="1" name="cantidad1" id="cantidad1" required><br>
        <br>
        <label>Fecha Prestamo</label><br>
        <input type='text' name='fecpre' id='fecpre' readonly value ='<?php echo date("Y-m-d"); ?>'><br>
        <br>
        <label>Estado Entrega</label><br>
            <select name="lstentrega" id="lstentrega">
                <option value="Excelente">Excelente</option>
                <option value="Bueno">Bueno</option>
                <option value="Regular">Regular</option>   
            </select>
        <br>
        <div id="idDivEstado"><img src="images/loading.gif" id="loading" style="max-width:300px; width:100%;height:auto; display:none;"></div>
        <hr>
        <input type="button" value="GUARDAR" name="PrestamoSubmit" id="idSubmitPrestamo" class="red">
            
            
        
    </form>
        <script>
            $(document).ready(function(){
                var cantidadMaxima = $('#lstpresta').find(":selected").attr('cantidad');
                $('#cantidad1').attr('max',cantidadMaxima);

                //Función para validar que el valor de prestamos es igual o menor a la cantidad disponibles 
                $('#lstpresta').on('change',function(e){
                    var cantidadMaxima = $('#lstpresta').find(":selected").attr('cantidad');
                    $('#cantidad1').attr('max',cantidadMaxima);
                    $('#cantidad1').val(cantidadMaxima);
                });
            });
        </script>
    </body>
</html>