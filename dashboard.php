<?php

session_start();


$isteacher=false;
if($_SESSION['rol']==1){
    $isteacher=true;

}
if(($_SESSION['rol']) !=""){
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
        <main id="index">
        <?php
        echo $_SESSION['rol'];?>
        <?php if ($isteacher):?>
        
            <a href="logout.php">Cerrar Sesión</a>
            
            <h1>Dash Profesor</h1>
<?php else: ?>
    <h1>Dash Alumno</h1>
<?php endif ?>        
            </main>
        </div>
        <?php require 'partials/actions.php'?>
</body>
</html>
<?php
}
else (
    header('Locatation:index.php')
);
?>