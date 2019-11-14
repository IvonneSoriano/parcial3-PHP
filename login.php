<?php
session_start();
include 'database.php';

$carnet = $_POST["carnet"];
$contra = md5($_POST["contra"]);
$select = "SELECT * FROM registro WHERE carnet='$canet' AND contra='$contra'";

$resultado = mysqli_query($conn,$select);
if(!$resultado){
    header('Location:index.php?error=1');
}
else{
    $rol=mysqli_fetch_assoc($resultado);
    $_SESSION['rol']=$rol['rol'];
    $_SESSION['id']=$rol['id'];
    header('Location:dashboard.php');
}