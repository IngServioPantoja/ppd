<!doctype html>
<html>
<head>
        <title> Prestamo </title>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet">
         <script src="js/jquery-2.1.1.js"></script>
         <script src="js/script.js"></script>
         <script src="js/jquery.validate.js"></script>
         <script src="js/jquery.ui.datepicker-es.js"></script>
        <script src="js/micodigo.js"></script>
        <script src="js/micodigo2.js"></script>
    </head>
    
    <body>
        <img src="images/escudo.jpg" alt="Jesus de Pragaga" id="imginicio">
        <img src="images/iucesmag.png" alt="Jesus de Pragaga" id="imgcesmag">
        <label id="titulo"> 
            INSTITUCIÓN EDUCATIVA JESÚS DE PRAGA
        </label>
        <header id='seccionContra'>
        
            <form id='frmcontra' method="post">
         <h3>Ingreso al Sistema</h3>   
            <hr>
            <label> Usuario</label>
            
            <input type ="text" name="username" class="input username" id="username" onfocus="this.value=''" value="Usuario" required>
            <br>
            <label> Contraseña </label>
            <input type="password" name="password" id="password" class="input password" value="Clave" onfocus="this.value=''" >
            <br>
            <input type="button" Value="Ingresar" id="botonEntrada">
            <hr>
            <div style="display:block;">
                <span style="color:red;" id="idEstadoAutenticacion"></span>
            </div>   
        </form>

    </header>
        <footer id="froinicio"> 
            <br>
            <i> Institución Educativa Jesus de Praga - Sandonà Nariño</i>
            <br>
            <i> Desarrollado por: </i>
            <i> Sofia Navarro, Oscar Arturo, Juan Gracia, Cristian Pantoja, Miguel Mera</i>
            <br>
            <i> Orientado por: </i>
            <i> Profesora: Sandra Vallejo y Profesor: Luis Estrada</i>
            <br>
            <i> Institucion Universitaria - CESMAG - 2014 </i>
        </footer>
    </body>
</html>
