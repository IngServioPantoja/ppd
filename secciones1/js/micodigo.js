$(document).ready(function(){
    var cod=0;
    cod = parseInt($("#cod").val());

    $("#menuD").click(function(){
        $("#sec1").hide();
        $("#sec2").show();
        $("#sec3").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
    });
    
    $("#menuI").click(function(){
        $("#sec2").hide();
        $("#sec1").show();
        $("#sec3").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
    });
    
    $("#menuE").click(function(){
        $("#sec1").hide();
        $("#sec3").show();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").hide();
    });
    $("#menuC").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").show();
        $("#sec5").hide();
        $("#sec6").hide();
    });
    $("#menuF").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").show();
        $("#sec6").hide();
    });
     $("#menuG").click(function(){
        $("#sec1").hide();
        $("#sec3").hide();
        $("#sec2").hide();
        $("#sec4").hide();
        $("#sec5").hide();
        $("#sec6").show();
    });
    
    $("#consultar").click(function(){
        var cod=0;
        cod = parseInt($("#cod").val());
        if(cod == "123"){
        $("#sec41").show();
        }
        if(cod !="123"){
        alert("no existe el usuario");
    }
        });
        $("#consultars").click(function(){
        var cod=0;
        cod = parseInt($("#cod").val());
        if(cod == "123"){
        $("#sec41").show();
        }
        if(cod !="123"){
        alert("no existe el usuario");
    }
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
        
    $("#frm1").submit(function(){
        alert ("Los datos son validos");
    });
    
    });
});
