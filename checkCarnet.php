<?php
include 'database.php';

$carnet = $_GET["carnet"];

$checkCarnet = mysqli_query($conn,"SELECT * FROM registro WHERE carnet = '$carnet'");
if(mysqli_num_rows($checkCarnet)>0){
    echo 'Este carnet ya esta registrado';
}