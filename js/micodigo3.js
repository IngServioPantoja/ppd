$(document).ready(function(){
    
   
    $("#guardar1").click(function(){
        if ($("#frm1").valid()){
            $.ajax({
                url: "insertar2.php",
                type: "post",
                data: $("#frm1").serialize(),
                beforeSend: function(){
                    
                    $("#divres").html("<br><br><br>Espere un momento..");
                },
                success: function(resp){
                    $("#divres").html(resp);
                }
            });
         
             
        }
          
    });
     
     
     $("#guardar").click(function(){
            if ($("#frm2").valid()){
                $.ajax({
                    url: "insertar3.php",
                    type: "post",
                    data: $("#frm2").serialize(),
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
