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
            <div class="card col-lg-6 ">
                    <h1>Inicia Sesion</h1>
                    <div class="card-body">
                        <form action="login.php" method="post" >
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Carnet" name="carnet" id="carnet" require>
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contrasena" name="contra" id="contra" require>
                                </div>
                                <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Iniciar Sesion">
                                        <small id="emailHelp" class="form-text text-muted">Si no tienes una cuenta, registrate!</small>
                                    </div>
                                
                        </form>
                    </div>
            </div>
                
            </main>
        </div>
        <?php require 'partials/actions.php'?>
</body>
</html>