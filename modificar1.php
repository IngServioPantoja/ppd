<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="js/jquery.js"></script>
        <script src="js/kickstart.js"></script>
        <script src="js/micodigo2.js"></script>
        <link href="css/style.css" rel="stylesheet">
     
    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>
        <div class='grid'>
        <form action='modificar2.php' method="post" id="frmmodificar1">
            <h4>Datos Usuario</h4>
            <?php
                $xusu = $_POST["xusu"];
                include 'conecta.php';
                $bd = conectar();
                if (!$bd) return;
                $cad = "select * from usuario where idUsuario = $xusu";
                $res = mysql_query($cad,$bd);
                $arr = mysql_fetch_array($res,2);
                echo "<label>Id Usuario</label><br>";
                
                echo "<input type='number' name='txtid' required value='$arr[0]'><br>";
                echo "<input type='hidden' name='oculto' value='$arr[0]'>";
                 
                echo "<label>Nombre</label><br>";
                echo "<input type='text' name='txtnom' required value='$arr[1]'><br>";
                
                  
                echo "<label>Ocupación</label><br>";
                echo "<input type='text' name='txtoc' required value='$arr[2]'><br>";
                
                
                echo "<label>Cédula</label><br>";
                echo "<input type='number' name='txtced' required value='$arr[3]'><br>";
              
                echo "<label>Telefono</label><br>";
                echo "<input type='number' name='txttel' required value='$arr[4]'><br>";
                
                echo "<label>Dirección</label><br>";
                echo "<input type='text' name='txtdir' required value='$arr[5]'><br>";
                
                echo "<hr>";
                echo "<input type = 'button' id='btmguardarcam' value='Guardar Cambios' class='red'>";
            ?>
        </form>
        </div>
        
    </body>
</html>
