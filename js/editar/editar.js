function agregaform(datos){
    d=datos.split("||");
    $('#editar-carnet').val(d[0]);
    $('#editar-name').val(d[1]);
    $('#editar-lastname').val(d[2]);
    $('#editar-degree').val(parseInt(d[3],10));
    $('#editar-uni').val(parseInt(d[4],10));
    $('#editar-dui').val(d[5]);
    $('#editar-edad').val(parseInt(d[6],10));
    $('#editar-resp').val(d[7]);
    $('#editar-id').val(d[8]);
};

function editData() {
    carnet=$('#editar-carnet').val();
    nombre=$('#editar-name').val();
    apellido=$('#editar-lastname').val();
    degree=$('#editar-degree').val();
    uni=$('#editar-uni').val();
    dui=$('#editar-dui').val();
    edad=$('#editar-edad').val();
    resp=$('#editar-resp').val();
    id=$('#editar-id').val();

    cadena="carnet="+carnet+"&nombre="+nombre+"&apellido="+apellido+"&degree="+degree+"&uni="+uni+"&dui="+dui+"&edad="+edad+"&resp="+resp+"&id="+id;
    $.ajax({
        type:"POST",
        url:"js/editar/editar.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('partials/tabla.php');
                alertify.success("Actualizado con exito");
            }
            else{

                alertify.error("Fallo el servidor");
            }
        }
    });
}
$(document).ready(function(){
    $('#actualizar').click(function(){
      editData();
    })
})