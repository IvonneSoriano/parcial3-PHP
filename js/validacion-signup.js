
function validar(){
        var alerta="";
        var carnetPattern = "^[a-z A-Z][a-z A-Z][0-9][0-9][0-9][0-9][0-9][0-9]";
        var duiPattern = "^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]-[0-9]";
        var namePattern = "^[a-z A-Z]+$";
        var i;
        if(!($('#carnet').val().match(carnetPattern))){
            // $('#carnet').css('border-color','red');
            alert("El carnet no es valido");
            return false;
        }
        else if($('#contra').val()!= $('#confirm').val()){
            alert("Las contraseñas no coinciden");
            return false;
        }
        else if(!($('#name').val().match(namePattern))){
            alert("El nombre no es valido");
            return false;
        }
        else if(!($('#lastname').val().match(namePattern))){
            alert("El apellido no es valido");
            return false;
        }   
        else if($('#degree').val()==""){
            alert("Seleccione una carrera");
            return false;
        }
        else if($('#uni').val()==""){
            alert("Seleccione una Universidad");
            return false;
        }
        else if(!($('#dui').val().match(duiPattern))){
            alert("El DUI no es valido");
            return false;
        }
        
        else if($('#edad').val()==""){
            alert("La edad no es valido");
            return false;
        }
        
        else if(!($('#resp').val().match(namePattern))){
            alert("La persona responsable no es valido");
            return false;
        }
        else{
            return true;
        }
    };          
