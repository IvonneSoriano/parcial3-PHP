<?php
include '../../database.php';

$rol = 2;
$carnet = $_POST["carnet"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$contra = md5($_POST["contra"]);
$degree = $_POST["degree"];
$uni = $_POST["uni"];
$dui = $_POST["dui"];
$edad = $_POST["edad"];
$resp = $_POST["resp"];

$insert = "INSERT INTO registro(rol,carnet,nombre,apellido,contra,carrera,uni,dui,edad,resp) VALUES ('$rol','$carnet','$nombre','$apellido','$contra','$degree','$uni','$dui','$edad','$resp') ";

    echo $resultado = mysqli_query($conn,$insert);