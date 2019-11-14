<?php
include 'database.php';

$rol = 1;
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
    header('Location:signup.php?error=1');
}
else{
    header('Location:dashboard.php');
}