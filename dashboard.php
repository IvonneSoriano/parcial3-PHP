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
        <main id="index">
        <?php
        if($isteacher){
            echo "
            <h1>Dash Profesor</h1>"
        }
        ?>
                
            </main>
        </div>
        <?php require 'partials/actions.php'?>
</body>
</html>