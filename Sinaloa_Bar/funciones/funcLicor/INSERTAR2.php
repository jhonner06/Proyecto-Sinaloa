<?php
include("../../conexion/CONEXION2.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$cantidad=$_POST['cantidad'];
/*$stock_max=$_POST['stock_max'];
$stock_min=$_POST['stock_min'];*/
$nombre=$_POST['nombre'];
$fk_marca=$_POST['fk_marca'];
$fk_tproduc=$_POST['fk_tproduc'];
$precio_unitario=$_POST['precio_unitario'];


$sql="INSERT INTO producto (id_producto,cantidad,/*stock_max,stock_min,*/nombre,fk_marca,
                            fk_tproduc,precio_unitario) 
VALUES('$id_producto','$cantidad',/*'$stock_max','$stock_min',*/'$nombre','$fk_marca',
                            '$fk_tproduc','$precio_unitario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../../Vistas/Administrador/DetallesLicores.php");
    
}else {
}
?>