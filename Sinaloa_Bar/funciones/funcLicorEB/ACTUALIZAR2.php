<?php 
    include("../../conexion/CONEXION2.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM producto WHERE nombre='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="UPDATE2.php" method="POST">
                    <label><b>Nombre del Producto:</label>
                                <input type="text" name="nombre" value="<?php echo $row['nombre']?>" readonly>
                                <br><br><label>Código del producto:</label>
                                <input type="number" class="form-control mb-3" name="id_producto" placeholder="id_producto" value="<?php echo $row['id_producto']?>" readonly></input>
                                <label>Cantidad de Producto ha ingresar:</label>
                                <input type="number" class="form-control mb-3" name="cantidad" placeholder="cantidad" value="<?php echo $row['cantidad']?>">
                                <!--<input type="number" class="form-control mb-3" name="stock_max" placeholder="stock_max" value="<?php echo $row['stock_max']?>">
                                <input type="number" class="form-control mb-3" name="stock_min" placeholder="stock_min" value="<?php echo $row['stock_min']?>">-->
                                <label>Marca del producto:</label>
                                <input type="number" class="form-control mb-3" name="fk_marca" placeholder="fk_marca" value="<?php echo $row['fk_marca']?>">
                                <label>Tipo de producto:</label>
                                <input type="number" class="form-control mb-3" name="fk_tproduc" placeholder="fk_tproduc" value="<?php echo $row['fk_tproduc']?>">
                                <label>Precio del Producto:</label>
                                <input type="number" class="form-control mb-3" name="precio_unitario" placeholder="precio_unitario" value="<?php echo $row['precio_unitario']?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>