<?php
session_start();

include 'database.php';

$rol = 2;
$carnet = $_POST["carnet"];
$contra = md5($_POST["contra"]);
$nombre = $_POST["name"];
$apellido = $_POST["lastname"];
$degree = $_POST["degree"];
$uni = $_POST["uni"];
$dui = $_POST["dui"];
$edad = $_POST["edad"];
$resp = $_POST["resp"];

$insert = "INSERT INTO registro(rol,carnet,nombre,apellido,contra,carrera,uni,dui,edad,resp) VALUES ('$rol','$carnet','$nombre','$apellido','$contra','$degree','$uni','$dui','$edad','$resp') ";

$resultado = mysqli_query($conn,$insert);
if(!$resultado){
    echo "no registrado";
    // header('Location:signup.php?error=1');
}
else{
    $select = "SELECT * FROM registro WHERE carnet='$carnet' AND contra='$contra'";
    $resultado = mysqli_query($conn,$select);
    $rol=mysqli_fetch_assoc($resultado);
    $_SESSION['rol']=$rol['rol'];
    $_SESSION['id']=$rol['id'];
    $_SESSION['name']=$rol['nombre'];
    echo $_SESSION['rol'];
    header('Location:dashboard.php');

}