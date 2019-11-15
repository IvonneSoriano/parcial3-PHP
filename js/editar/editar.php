<?php
include '../../database.php';

$carnet = $_POST["carnet"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$degree = $_POST["degree"];
$uni = $_POST["uni"];
$dui = $_POST["dui"];
$edad = $_POST["edad"];
$resp = $_POST["resp"];
$id=$_POST["id"];

$update = "UPDATE registro SET carnet='$carnet',nombre='$nombre',apellido='$apellido',carrera='$degree',uni='$uni',dui='$dui',edad='$edad',resp='$resp' WHERE id='$id' ";

    echo $resultado = mysqli_query($conn,$update);