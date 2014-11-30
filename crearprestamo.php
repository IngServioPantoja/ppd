<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Crear</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/jquery-2.1.1.js"></script>
         <script src="js/script.js"></script>
         <script src="js/jquery.validate.js"></script>
         <script src="js/jquery.ui.datepicker-es.js"></script>
        <script src="js/micodigo.js"></script>
        <script src="js/micodigo2.js"></script>
    
    </head>
 

        <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>
        <h2>Préstamo de Articulos</h2>
        <section>
        <form action="tt.php" method="post" id="frm5" >
            <label>Digite Código de Usuario</label>
            <br>
            <input type="text" name="cod" id="cod" class="required digits"><br>
            <br>
            <input type="button" value="CONSULTAR" id="consultarco" >
        </form>
        </section>
        <script>
                $("#consultarco").click(function(){
                    $.ajax({
                        url: "tt.php",
                        type: "post",
                        data: $("#frm5").serialize(),
                        beforeSend: function(){
                            $("#divres").html("<br><br><br>Espere un momento..");
                        },
                        success: function(resp){
                            $("#divres").html(resp);
                        }
                    });  
                });
        </script>
        
        

    </body>
</html>
