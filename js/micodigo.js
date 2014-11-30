$(document).ready(function(){
   

    $("#seccionContra").show(); 
    $("#seccionUltima").hide();
     

    
    

  $("#botonEntrada").click(function(){
    
    var usuario = $("#username").val();
    var contraseña = $("#password").val();
    if($("#username").val()===""){
        alert("Digite Usuario");
        return;
    }
 
    if($("#password").val()===""){
        alert("Digite Clave");
        return;
    }
            
    $.ajax({
        url:"verificar.php",
        type: "POST",
        data: $("#frmcontra").serialize(),
        beforeSend: function(){
            $("#divres").html("Espere...");
        },
        success: function(respuesta){
            var i= parseInt(respuesta);
            if(i===0) {
                $("#idEstadoAutenticacion").html("Nombre de usuario o contraseña incorrectos");
               
            }
            else{
                location = "inicio.php";
            }
        }
    });
      
   });
   $("#cerrar").click(function(){
       window.location = "index.php";
      
  });   
  
    $("#botonguardarpres").click(function(){
            
                $.ajax({
                    url: "insertarpres.php",
                    type: "post",
                    data: $("#frmpres").serialize(),
                    beforeSend: function(){
                        
                        $("#divres").html("<br><br><br>Espere un momento..");
                    },
                    success: function(resp){
                        $("#divres").html(resp);
                    }
                });
             
                 
          
              
        });

















    $("#menuD").click(function(){
        $("#sec1").hide();
        $("#sec2").show();
        $("#sec3").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
        $("#sec7").hide();
    });
    
    $("#menuI").click(function(){
        $("#sec2").hide();
        $("#sec1").show();
        $("#sec3").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
        $("#sec7").hide();
    });
    
    $("#menuE").click(function(){
        $("#sec1").hide();
        $("#sec3").show();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
        $("#sec7").hide();
    });
    $("#menuC").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").show();
        $("#sec5").hide();
        $("#sec6").hide();
        $("#sec7").hide();
    });
    $("#menuF").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").show();
        $("#sec6").hide();
        $("#sec7").hide();
    });
     $("#menuG").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").show();
        $("#sec7").hide();
    });
    
     $("#menucon").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
        $("#sec7").show();
    });
    
    
    
    
    
        
    $("#menuS").click(function(){
    
    $("#seccionContra").show(); 
    $("#seccionUltima").hide(); 
    
        $("#sec1").show();
        $("#sec2").hide();
        $("#sec3").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
        $("#sec7").hide();
        
    });
       
    

       
        
     $("#guardar").click(function(){   
        var a=0;
        var b=0;
        var c=0;
        var d=0;
        var e=0;
       
        a= $("#t1").val(); 
        b= parseInt($("#t3").val()); //Cadanea En Enteros
        c= parseInt($("#t2").val());
        d= parseInt($("#t3").val());
     
    $("#divres").append ("<tr>"); 
       $("#divres").append ("<td>" + a + "</td>");
       $("#divres").append ("<td>" + b + "</td>");
       $("#divres").append ("<td>" + c + "</td>");
       $("#divres").append ("<td>" + d + "</td>");
       $("#divres").append ("<td>" + $("#lstocu option:selected").text() + "</td>");
       $("#divres").append ("</tr>");
        
    
        
        
        
     });  
    $("#frm1").submit(function(){
        alert ("Los Datos Son Validos");
    });
   
   //Codigo para realizar el envio del formulario de prestamo
   $("#idSubmitPrestamo").click(function(){
        if ($("#frmpres").valid()){
            $.ajax({
                url: "cPrestamo.php",
                type: "post",
                data: $("#frmpres").serialize(),
                beforeSend: function(){
                    $("#divres").html("<br><br><br>Espere un momento..");
                },
                success: function(resp){
                    $("#divres").html("<br><br><br>Acción realizada exitosamente");
                }
            });
         
             
        }else
        {
            alert("Diligencie todos los campos");
        }
          
    });


  });  
    

