<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sistema Gestión de Prestamos</title>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery.js" type="text/javascript"></script>

    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>
        <img src="images/inicio.png" alt="Jesus de Pragaga" id="imgkk">
        <br>
        <h1> <b> SISTEMA GESTIÓN DE PRESTAMOS </b> </h1>
            <p> 
            <br>
                La Institución Educativa Jesús de Praga ubicada en el corregimiento de bolivar buscó, 
                en convenio con los Estudiantes de Ingenieria de Sistemas, de Sexto Semestre 
                de La Institución Universitaria CESMAG sede Pasto, implementar un nuevo sistema 
                de prestamos de equipos deportivos y de laboratorio para los estudiantes, docentes 
                y padres de familia.
            </p>         
    </body>
</html>
