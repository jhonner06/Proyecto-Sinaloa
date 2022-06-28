<?php

include("../../conexion/CONEXION2.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM producto  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../Vistas/Encargado_barra/DetallesGaseosas.php");
    }
?>