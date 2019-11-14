<?php
include 'database.php';

$dui = $_GET["dui"];

$checkdui = mysqli_query($conn,"SELECT * FROM registro WHERE dui = '$dui'");
if(mysqli_num_rows($checkdui)>0){
    echo 'Este DUI ya esta registrado';
}