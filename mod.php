<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Modificar Datos</title>
        <script src="js/jquery.js"></script>
        <script src="js/kickstart.js"></script>
        <script src="js/micodigo2.js"></script>
        <link href="css/styles.css" rel="stylesheet">
        
    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>
        <div class="grid">
            <form action="modificar1.php" method="post" id="frmmodificar">
            <table class="striped sortable">
                <thead>
                    <tr>
                        <th>Seleccione</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include ("conecta.php");
                        $bd = conectar();
                        if (!$bd) return;
                        $cod = "select idUsuario, Nombre from usuario";
                        $res = mysql_query($cod,$bd);
                        while ($arr = mysql_fetch_array($res,2)){
                            echo "<tr><td width=100>";
                            echo "<input type='radio' name='xusu' value='$arr[0]'></td>";
                            echo "<td>$arr[0]</td>";
                            echo "<td><i class='icon-user'></i> $arr[1]</td>";
                            echo "</tr>";
                        }
                        mysql_close($bd);
                    ?>
                </tbody>
            </table>
                
                <input type="button" id="editar" name="editar" value="Editar" class="blue">
            </form>
        </div>
    </body>
</html>
