function validar(){
        var alerta="";
        var carnetPattern = "^[a-z A-Z][a-z A-Z][0-9][0-9][0-9][0-9][0-9][0-9]";
        var duiPattern = "^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]-[0-9]";
        var namePattern = "^[a-z A-Z]+$";
        var i;
        if(!($('#carnet, #editar-carnet').val().match(carnetPattern))){
            // $('#carnet').css('border-color','red');
            alertify.error("El carnet no es valido");
            return false;
        }
        else if($('#contra').val()!= $('#confirm').val()){
            alertify.error("Las contraseñas no coinciden");
            return false;
        }
        else if(!($('#name,#editar-name').val().match(namePattern))){
            alertify.error("El nombre no es valido");
            return false;
        }
        else if(!($('#lastname,#editar-lastname').val().match(namePattern))){
            alertify.error("El apellido no es valido");
            return false;
        }   
        else if($('#degree,#editar-degree').val()==""){
            alertify.error("Seleccione una carrera");
            return false;
        }
        else if($('#uni,#editar-uni').val()==""){
            alertify.error("Seleccione una Universidad");
            return false;
        }
        else if(!($('#dui,#editar-dui').val().match(duiPattern))){
            alertify.error("El DUI no es valido");
            return false;
        }
        
        else if($('#edad,#editar-edad').val()==""){
            alertify.error("La edad no es valido");
            return false;
        }
        
        else if(!($('#resp,#editar-resp').val().match(namePattern))){
            alertify.error("La persona responsable no es valido");
            return false;
        }

        else{
            return true;
        }
    };        
    $(document).ready(function () {
        
        $('#carnet,#editar-carnet').blur(function () {
            var carnet = $(this).val();
            console.log(carnet);
            if(carnet!=""){

            
            $.get('checkCarnet.php', {carnet:carnet},function(data){
                console.log(data);
                if(data){
                    alertify.error(data);
                    $('#carnet,#editar-carnet').val("");
                }
            });
        }

        });

        $('#dui,#editar-dui').blur(function () {
            var dui = $(this).val();
            console.log(dui);
            if(dui!=""){

            
            $.get('checkdui.php', {dui:dui},function(data){
                console.log(data);
                if(data){
                    alertify.error(data);
                    $('#dui,#editar-dui').val("");
                }
            });
        }

        });


      });
