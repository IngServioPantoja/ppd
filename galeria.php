<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Galeria</title>
        <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/spacegallery.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/custom.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/spacegallery.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
    </head>
     <?php
            include './verificaSesion.php';
            $v = verificar();
            if ($v==0) return;
           
            
            
        ?>
    <body>
        <div class="wrapper">
            <br>
        <h1>Institución Educativa Jesús de Praga</h1>
        <ul class="navigationTabs">
            <li><a href="#about" rel="about">Galeria</a></li>
            
        </ul>
        <div class="tabsContent">
            <div class="tab">
                
				<div id="myGallery" class="spacegallery">
                                    <img src="images/C1.JPG" alt="" />
                                    <img src="images/C2.JPG" alt="" />
                                    <img src="images/C3.JPG" alt="" />
                                    <img src="images/C4.JPG" alt="" />
                                    <img src="images/C5.JPG" alt="" />
                                    <img src="images/C6.JPG" alt="" />
                                    <img src="images/C12.JPG" alt="" />
                                    <img src="images/C13.JPG" alt="" />
                                </div>
            </div>
           
    </div>
    </body>
</html>
