$(document).ready(function(){
    
$("#inixio").click(function(){
       //llamada ajax 1
       $("#divres").load("inicio1.html");
   });
   $("#cuentausuario").click(function(){
       //llamada ajax 1
       $("#divres").load("cuenta.php");
   });
   $("#mision").click(function(){
       //llamada ajax 1
       $("#divres").load("mision.html");
   });
   $("#vision").click(function(){
       //llamada ajax 1
       $("#divres").load("vision.html");
   });
   $("#filosofia").click(function(){
       //llamada ajax 1
       $("#divres").load("filosofia.html");
   });
   
   $("#galeria").click(function(){
       //llamada ajax 1
       $("#divres").load("galeria.php");
   });
   
   $("#objetivos").click(function(){
       //llamada ajax 1
       $("#divres").load("objetivos.html");
   });
   $("#implemento").click(function(){
       //llamada ajax 1
       $("#divres").load("articulo.php");
   });
   $("#contactos").click(function(){
       //llamada ajax 1
       $("#divres").load("contactos.html");
   });
   $("#accpres").click(function(){
       //llamada ajax 1
       $("#divres").load("crearprestamo.php");
      
   });

   
    $("#consultar1").click(function(){
   var cod=0;
        cod = parseInt($("#cod").val());
   if(cod === "123"){
        $("#sec41").show();
     }
        if(cod !="123"){
        alert("No Existe El Usuario");
    }
   });
   
   
   
   $("#conimpl").click(function(){
        
    $("#divres").load("consultar.php");
        
 
    } );
    //Menu para consultar usuarios       
    $("#conusua").click(function(){
      $("#divres").load("consultarusu.php");
    } );   
   
   /** Prestamos **/
    $("#btmodificar").click(function(){
        
    $("#divres").load("mod.php");
    } );     
   
    $("#devpres").click(function(){
        
    $("#divres").load("devoluciones.php");
    } );    
   
    $("#idMenuPInformes").click(function(){
        
    $("#divres").load("pInformes.php");
    } );   
   
   
   
  $("#editar").click(function(){
     
                $.ajax({
                    url: "modificar1.php",
                    type: "post",
                    data: $("#frmmodificar").serialize(),
                    beforeSend: function(){
                        
                        $("#divres").html("<br><br><br>Espere un momento..");
                    },
                    success: function(resp){
                        $("#divres").html(resp);
                    }
                });
          
        });  
   
   
   $("#btmguardarcam").click(function(){
      if ($("#frmmodificar1").valid()){
                $.ajax({
                    url: "consultarusu.php",
                    type: "post",
                    data: $("#frmmodificar1").serialize(),
                    beforeSend: function(){
                        
                        $("#divres").html("<br><br><br>Espere un momento..");
                    },
                    success: function(resp){
                        $("#divres").html(resp);
                    }
                });
            }
          
        });
});