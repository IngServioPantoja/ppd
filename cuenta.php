<!DOCTYPE html>

<html>
    <head>
        <title>Cuenta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/styles.css" rel="stylesheet">
         <script src="js/jquery-2.1.1.js"></script>
         <script src="js/script.js"></script>
         <script src="js/jquery.validate.js"></script>
         <script src="js/micodigo3.js"></script>
      
    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>
        <form id="frm2">
            <h2>Crear Cuenta Usuario</h2>
            <label>Codigo</label><br>
            <input type="number" name="t1"  class="required digits" id="t1"><br>
            
            <label>Nombre</label><br>
            <input type="text" name="t2" class="required" id="t2"><br>
            
            <label>Cédula</label><br>
            <input type="text" name="t3" class="required digits" id="t3"><br>
            
            <label>Telefono</label><br>
            <input type="text" name="t4" class="required digits" id="t4"><br>
           
            <label>Dirección</label><br>
            <input type="text" name="t5" class="required " id="t5"><br>

            <label>Ocupacion</label><br>
            <select name="ocu" id="ocu">
                    <option value="Docente">Docente</option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Padre de Familia">Padre de Familia</option>
                    <option value="Otro">Otro</option>
                </select>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="button" value="GUARDAR" name="guardar" id="guardar">
            <input type="reset" value="LIMPIAR">
        </form>
    </body>
</html>
