function addData(carnet,nombre,apellido,contra,degree,uni,dui,edad,resp){
    cadena="carnet="+carnet+"&nombre="+nombre+"&apellido="+apellido+"&contra="+contra+"&degree="+degree+"&uni="+uni+"&dui="+dui+"&edad="+edad+"&resp="+resp;
    $.ajax({
        type:"POST",
        url:"js/insertar/insertar.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('partials/tabla.php');
                alert("Agregado con exito");
            }
            else{

                alert("Fallo el servidor");
            }
        }
    });
}

$(document).ready(function(){
    $('#tabla').load('partials/tabla.php');
$('#guardar-nuevo').click(function(){
    carnet=$('#carnet').val();
    nombre=$('#name').val();
    apellido=$('#lastname').val();
    contra=$('#contra').val();
    degree=$('#degree').val();
    uni=$('#uni').val();
    dui=$('#dui').val();
    edad=$('#edad').val();
    resp=$('#resp').val();
    addData(carnet,nombre,apellido,contra,degree,uni,dui,edad,resp);
});
});