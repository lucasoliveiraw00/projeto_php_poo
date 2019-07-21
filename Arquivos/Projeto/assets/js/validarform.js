$(document).ready(function(){

    $("#submit1").click(function(e){

    e.preventDefault();
        var erros = 0;
        $("#form1 input,#form1 textarea,#form1 select").each(function(){
            
        var r = $(this).val().trim();
            r == "" ? erros++ : "";

            if (r === '') {
            var x = $(this).attr('id');
            $(".invalido-"+x).css("display", "block");

            }else if (r != '') {
            var x = $(this).attr('id');
            $(".invalido-"+x).css("display", "none");
            }
            
        });
        
        if(erros > 0 ){
            
            alert("Existe(em) campo(os) vazio(os) neste fomulário");
                
        } else{
            $("#form1").submit()
        }		
        
    });

    $("#submit2").click(function(e){

        e.preventDefault();
            var erros = 0;
            $("#form2 input,#form2 textarea,#form2 select").each(function(){
                
            var r = $(this).val().trim();
                r == "" ? erros++ : "";

                if (r === '') {
                var x = $(this).attr('id');
                $(".invalidoform2-"+x).css("display", "block");

                }else if (r != '') {
                var x = $(this).attr('id');
                $(".invalidoform2-"+x).css("display", "none");
                }
                
            });
            
            if(erros > 0 ){
                
                alert("Existe(em) campo(os) vazio(os) neste fomulário");
                    
            } else{

                $("#form2").submit()
            }		
            
        });

        
        $('#form1 input,#form1 textarea,#form1 select,#form2 input,#form2 textarea,#form2 select').each(function() {
            if (  $(this).attr('readonly') != "readonly" ){
                $(this).on('keyup',function(){  
                var r = $(this).val().trim();
                if ( r != '' ) {  
                    var x = $(this).attr('id');
                    $(".invalido-"+x).css("display", "none");
                }
                });
            } 
        });

        $(this).on('click',function(){    
            $('#form1 input,#form1 textarea,#form1 select,#form2 input,#form2 textarea,#form2 select').each(function() {
            var r = $(this).val().trim();
            if (r != '') {
                var x = $(this).attr('id');
                $(".invalido-"+x).css("display", "none");
            }
            });
        });
        $('#form2 input,#form2 textarea,#form2 select').each(function() {
            if (  $(this).attr('readonly') != "readonly" ){
                $(this).on('keyup',function(){  
                var r = $(this).val().trim();
                if ( r != '' ) {  
                    var x = $(this).attr('id');
                    $(".invalidoform2-"+x).css("display", "none");
                }
                });
            } 
        });

        $(this).on('click',function(){    
            $('#form1 select,#form2 input,#form2 textarea,#form2 select').each(function() {
            var r = $(this).val().trim();
            if (r != '') {
                var x = $(this).attr('id');
                $(".invalidoform2-"+x).css("display", "none");
            }
            });
        });

});