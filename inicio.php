<?php
    include './verificaSesion.php';
    $v = verificar();
    if ($v==0) return;
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset='utf-8'>
      <link rel="stylesheet" href="css/styles.css">
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/script.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/micodigo.js"></script>
      <script src="js/micodigo2.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
      <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
   <title> Prestamos </title>
</head>
<body>
    <header class="col-xs-12" style="margin-bottom: 20px;background: #09638a;background: -moz-linear-gradient(top,  #09638a 0%, #1e8dbc 50%, #09638a 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#09638a), color-stop(50%,#1e8dbc), color-stop(100%,#09638a));
background: -webkit-linear-gradient(top,  #09638a 0%,#1e8dbc 50%,#09638a 100%);background: -o-linear-gradient(top,  #09638a 0%,#1e8dbc 50%,#09638a 100%);
background: -ms-linear-gradient(top,  #09638a 0%,#1e8dbc 50%,#09638a 100%);background: linear-gradient(to bottom,  #09638a 0%,#1e8dbc 50%,#09638a 100%);">
        <label class="col-xs-12 col-sm-4" style="text-align: center;"> 
            <p style="color: #fff;font-size: 30px; text-align: center;padding-top: 15px;">INSTITUCIÓN EDUCATIVA JESÚS DE PRAGA</p>
        </label>
        <div class="col-xs-12 col-sm-4">
          <img src="images/sandona.png" alt="Jesus de Pragaga" style="width: 100%;max-height: 115px;height:100%;border-radius: 15px;">
        </div>
        <label class="col-xs-12 col-sm-4" style="text-align: center;"> 
            <p style="color: #fff;font-size: 30px; text-align: center;padding-top: 15px;">INSTITUCIÓN UNIVERSITARIA CESMAG</p>
        </label>
    </header> 
  <aside>
    <div id='cssmenu'>
      <ul>
         <li class='active'><a href='#' id="inixio"><span>Inicio</span></a>
         </li>
         <li class='active has-sub'><a href='#' id="institucion"><span>Institución</span></a>
            <ul>
               <li class='has-sub'><a href='#' id="mision"><span>Misión</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="vision"><span>Visión</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="filosofia"><span>Filosofia Institucional</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="objetivos"><span>Objetivos</span></a>
               </li> 
            </ul>
         </li>
         <li class='active has-sub'><a href='#' id="crearcuenta"><span>Crear Cuenta</span></a>
            <ul>
               <li class='has-sub'><a href='#' id="cuentausuario"><span>Crear Cuenta Usuario</span></a>
               </li> 
            </ul>
         </li>
          <li class='active has-sub'><a href='#' id="implemento"><span>Regitrar Implemento</span></a>
            
         </li>
          <li class='active has-sub'><a href='#' id="prestamo"><span>Prestamo</span></a>
            <ul>
               <li class='has-sub'><a href='#' id="accpres"><span>Crear Prestamo</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="devpres"><span>Devolución Prestamo</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="respres"><span>Reservar Prestamo</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="idMenuPInformes"><span>Informes</span></a>
               </li> 
            </ul> 
         
          <li class='active has-sub'><a href='#' id="consultar"><span>Consultar</span></a>
            <ul>
               <li class='has-sub'><a href='#' id="conusua"><span>Usuarios</span></a>
               </li> 
               <li class='has-sub'><a href='#' id="conimpl"><span>Implementos</span></a>
               </li> 
            </ul> 
         </li>
         
         <li class='active has-sub'><a href='#' id="galeria"><span>Galeria</span></a> 
         </li>
         <li><a href="index.php" id="cerrar"><span>Cerrar Sesión</span></a></li>
         <li class='active'><a href='#' id="contactos" ><span>Contactos</span></a></li>

      </ul>
    </div>
  </aside>

    <form id="divres"> 
        <img src="images/inicio.png" alt="Jesus de Pragaga" id="imgkk">
        <br>
        <h1> <b> SISTEMA GESTIÓN DE PRESTAMOS</b> </h1>
            <p> 
            <br>
                La Institución Educativa Jesús de Praga ubicada en el corregimiento de bolivar buscó, 
                en convenio con los Estudiantes de Ingenieria de Sistemas, de Sexto Semestre 
                de La Institución Universitaria CESMAG sede Pasto, implementar un nuevo sistema 
                de prestamos de equipos deportivos y de laboratorio para los estudiantes, docentes 
                y padres de familia.
            </p>
        </form>

    <footer id="froinicio1" > 
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