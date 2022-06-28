<?php

include("../../conexion/CONEXION1.php");
$con=conectar();

$id_persona=$_GET['id'];

$sql="DELETE FROM persona  WHERE id_persona='$id_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../Vistas/perfil.php");
    }
?>