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

$sql="UPDATE producto SET id_producto='$id_producto',cantidad='$cantidad',/*stock_max='$stock_max',stock_min='$stock_min',*/fk_marca='$fk_marca',fk_tproduc='$fk_tproduc',precio_unitario='$precio_unitario'  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../Vistas/Encargado_barra/DetallesAguas.php");
    }
?>