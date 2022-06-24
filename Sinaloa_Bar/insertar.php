<?php
include("CONEXION1.php");
$con=conectar();

$pk_fk_tdoc=$_POST['pk_fk_tdoc'];
$id_persona=$_POST['id_persona'];
$contrasena=$_POST['contrasena'];
$p_nombre=$_POST['p_nombre'];
$s_nombre=$_POST['s_nombre'];
$p_apellido=$_POST['p_apellido'];
$s_apellido=$_POST['s_apellido'];
$fk_rol=$_POST['fk_rol'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$sexo=$_POST['sexo'];


$sql="INSERT INTO persona (pk_fk_tdoc,id_persona,contrasena,p_nombre,s_nombre,p_apellido,s_apellido,fk_rol,direccion,telefono,sexo) 
VALUES('$pk_fk_tdoc','$id_persona','$contrasena','$p_nombre','$s_nombre','$p_apellido','$s_apellido','$fk_rol','$direccion','$telefono','$sexo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: perfil.php");
    
}else {
}
?>