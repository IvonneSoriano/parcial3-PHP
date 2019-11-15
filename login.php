<?php
session_start();
include 'database.php';

$carnet = $_POST["carnet"];
$contra = md5($_POST["contra"]);
$select = "SELECT * FROM registro WHERE carnet='$carnet' AND contra='$contra'";

$resultado = mysqli_query($conn,$select);

if($resultado ->num_rows>0){
    $rol=mysqli_fetch_assoc($resultado);
    $_SESSION['rol']=$rol['rol'];
    $_SESSION['id']=$rol['id'];
    $_SESSION['name']=$rol['nombre'];
    print $_SESSION['rol'];
    header('Location:dashboard.php');
}
else{
    header('Location:index.php?error=1');
}