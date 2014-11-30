<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Articulo</title>
      
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
       
        <form id="frm1">
            <h2>Registrar Implemento</h2>
            
            <label>IdArtículo</label><br>
            <input type="number" name="idimplemento" id="idimplemento" class="required digits" ><br>
            <br>
            <label>Nombre </label><br>
            <input type="text" name="nomarticulo" id="nomarticulo" class="required "><br>
            <br>
            <label>Cantidad</label><br>
            <input type="text" name="cantidad" id="cantidad" class="required digits"><br>
            <br>
            <label>Tipo de Articulo</label><br>
            <select name="tip" id="tip">
                    <option value="Laboratorio">Laboratorio</option>
                    <option value="Instrumental">Instrumental</option>
                    <option value="Informatico">Informatico</option>
                    <option value="Artistico">Artistico</option>
                </select>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <label>Disponibilidad</label><br>
                <select name="dispo" id="dispo">
                    <option value="Disponible">Disponible</option>
                </select>
            <br>
            <br>
            <br>
            <br>
            <input type="button" value="GUARDAR" id="guardar1" name="guadar1">  
            <input type="reset" value="LIMPIAR">
        </form>
    
            
    </body>
</html>
