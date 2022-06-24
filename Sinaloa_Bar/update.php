<?php

include("CONEXION1.php");
$con=conectar();


$id_persona=$_POST['id_persona'];
$pk_fk_tdoc=$_POST['pk_fk_tdoc'];
$contrasena=$_POST['contrasena'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sql="UPDATE persona SET pk_fk_tdoc='$pk_fk_tdoc',contrasena='$contrasena',direccion='$direccion',telefono='$telefono' WHERE id_persona='$id_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: perfil.php");
    }
?>