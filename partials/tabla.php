<?php
<<<<<<< HEAD
require "database.php"?>
=======
session_start();

$isteacher=false;
if($_SESSION['rol']==1){
    $isteacher=true;

}
include "../database.php"?>
>>>>>>> 8b5e68f674e2f9393bc39e83f4b2aebe12f21876
<div class="row">
<div class="col-12">
<?php if ($isteacher):?>
            
            <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalRN">Añadir</button>
            <br>
            </caption>

                        
                    <?php endif ?> 
<table class="table table-striped">  
<thead class="thead-dark">
<tr>
<th>Carnet</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Carrera</th>
<th>Universidad</th>
<th>DUI</th>
<th>Edad</th>
<th>Responsable</th>
<?php if ($isteacher):?>
            
               
<th>Editar</th>
<th>Eliminar</th>
    
<?php endif ?>   
</tr>
</thead>
<tbody> 
<?php
$sql = "SELECT carnet,nombre,apellido,carrera.carrera,universidad.uni,dui,edad,resp FROM `registro` INNER JOIN carrera ON registro.carrera=carrera.id INNER JOIN universidad ON registro.uni=universidad.id";

$result=mysqli_query($conn,$sql);
while($ver=mysqli_fetch_row($result)){

?>
<tr>
<td><?php echo $ver[0] ?></td>
<td><?php echo $ver[1]?></td>
<td><?php echo $ver[2] ?></td>
<td><?php echo $ver[3] ?></td>
<td><?php echo $ver[4] ?></td>
<td><?php echo $ver[5] ?></td>
<td><?php echo $ver[6] ?></td>
<td><?php echo $ver[7] ?></td>
<?php if ($isteacher):?>
            <td>
            <button class="btn btn-warning" data-toggle="modal" data-target="#modalED">
            Editar
            </button>
            </td>
            <td>
            <button class="btn btn-danger" >
            Eliminar
            </button></td>
                
            <?php endif ?>  
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>