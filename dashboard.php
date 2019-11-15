<?php

session_start();

$isteacher=false;
if($_SESSION['rol']==1){
    $isteacher=true;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_SS1603344_CB160168</title>
    <?php require 'partials/styles.php'?>
    
</head>
<body>
    <div class="container">
<?php require 'partials/header.php'?>
        <main id="index" class="container">

        <?php if ($isteacher):?>
            
            <h1>Dash Profesor</h1>
            
<?php else: ?>
    <h1>Dash Alumno</h1>
<?php endif ?>      
<div id="tabla">
</div>


            </main>
        </div>




        <!-- modal para registros nuevos -->
  <!-- Modal -->
<div class="modal fade" id="modalRN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="" onsubmit="return validar();">
                            <div class="form-group">
                                <label for="carnet">Carnet</label>
                                <input name="carnet" id="carnet" type="text" maxlength="8" class="form-control" placeholder="Ej. SS160344" require>
                            </div>
                            <div class="form-group">
                                <label for="contra">Contraseña</label>
                                <input name="contra" id="contra" type="password" minlength="6" class="form-control"  require>
                            </div>
                            <div class="form-group">
                                <label for="confirm">Confirmar contraseña</label>
                                <input name="confirm" id="confirm" type="password" minlength="6" class="form-control"  require>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input name="name" id="name" type="text" minlength="3" maxlength="50" class="form-control" placeholder="Ej. Hugo Alexis" require>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellidos</label>
                                <input name="lastname" id="lastname" type="text" minlength="3" maxlength="50" class="form-control" placeholder="Ej. Sanchez Soriano" require>
                            </div>
                            <div class="form-group">
                                <label for="degree">Carrera</label>
                                <select name="degree" id="degree" class="form-control"  require>
                                <option value="">Elegi tu carrera</option>
                                    <option value="1">Ing. en Ciencias de la Computacion</option>
                                    <option value="2">Ing. en Mecatronica</option>
                                    <option value="3">Lic. en Idiomas</option>
                                    <option value="4">Lic. en mercadotecnia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uni">Universidad</label>
                                <select name="uni" id="uni"  class="form-control"  require>
                                <option value="">Elegi tu Universidad</option>
                                    <option value="1">Universidad Don Bosco</option>
                                    <option value="2">Universidad Nacional de El Salvador</option>
                                    <option value="3">Universidad Tecnologica de El Salvador</option>
                                    <option value="4">Universidad Jose Simeon Cañas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dui">DUI</label>
                                <input name="dui" id="dui" type="text" maxlength="10" class="form-control" placeholder="Ej. 01234567-8" require>
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input name="edad" id="edad" type="number" class="form-control" min="18" max="60" require >
                            </div>
                            <div class="form-group">
                                <label for="resp">Persona Responsable</label>
                                <input name="resp"  id="resp" type="text" minlength="10" maxlength="100" class="form-control" placeholder="Ej. John Doe" require>
                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardar-nuevo">Agregar</button>
      </div>
    </div>
  </div>
</div>

<!-- Termina el modal NUEVO-->

  <!-- Modal -->
  <div class="modal fade" id="modalED" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" onsubmit="return validar();">
                            <div class="form-group">
                                <label for="carnet">Carnet</label>
                                <input name="carnet" id="editar-carnet" type="text" maxlength="8" class="form-control" placeholder="Ej. SS160344" require>
                            </div>
                            <div class="form-group">
                                <label for="contra">Contraseña</label>
                                <input name="contra" id="editar-contra" type="password" minlength="6" class="form-control"  require>
                            </div>
                            <div class="form-group">
                                <label for="confirm">Confirmar contraseña</label>
                                <input name="confirm" id="editar-confirm" type="password" minlength="6" class="form-control"  require>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input name="name" id="editar-name" type="text" minlength="3" maxlength="50" class="form-control" placeholder="Ej. Hugo Alexis" require>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellidos</label>
                                <input name="lastname" id="editar-lastname" type="text" minlength="3" maxlength="50" class="form-control" placeholder="Ej. Sanchez Soriano" require>
                            </div>
                            <div class="form-group">
                                <label for="degree">Carrera</label>
                                <select name="degree" id="editar-degree" class="form-control"  require>
                                <option value="">Elegi tu carrera</option>
                                    <option value="1">Ing. en Ciencias de la Computacion</option>
                                    <option value="2">Ing. en Mecatronica</option>
                                    <option value="3">Lic. en Idiomas</option>
                                    <option value="4">Lic. en mercadotecnia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uni">Universidad</label>
                                <select name="uni" id="editar-uni"  class="form-control"  require>
                                <option value="">Elegi tu Universidad</option>
                                    <option value="1">Universidad Don Bosco</option>
                                    <option value="2">Universidad Nacional de El Salvador</option>
                                    <option value="3">Universidad Tecnologica de El Salvador</option>
                                    <option value="4">Universidad Jose Simeon Cañas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dui">DUI</label>
                                <input name="dui" id="editar-dui" type="text" maxlength="10" class="form-control" placeholder="Ej. 01234567-8" require>
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input name="edad" id="editar-edad" type="number" class="form-control" min="18" max="60" require >
                            </div>
                            <div class="form-group">
                                <label for="resp">Persona Responsable</label>
                                <input name="resp"  id="editar-resp" type="text" minlength="10" maxlength="100" class="form-control" placeholder="Ej. John Doe" require>
                            </div>
                                <div class="form-group">
                                        <input id="registrar" type="submit" class="btn btn-primary" value="Iniciar Sesion">
                                       
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizar">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Termina el modal EDICION -->






<?php require 'partials/actions.php'?>
<script src="js/validacion-signup.js"></script>
<script src="js/insertar/insertar.js"></script>
</body>
</html>