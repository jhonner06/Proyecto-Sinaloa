<?php 
    include("../../conexion/CONEXION1.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM persona WHERE id_persona='$id'";
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
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_persona" value="<?php echo $row['id_persona']?>">
                                <div>
                                <label>Tipo de documento:</label>
                                <select name="pk_fk_tdoc" id="pk_fk_tdoc">
                                <option value="CC">Cedula Ciudadania</option>
                                <option value="CE">Cédula de Extranjería</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                </select>
                                </div><br>
                                <label>Contraseña:</label>
                                <input type="password" class="form-control mb-3" name="contrasena" placeholder="contrasena" value="<?php echo $row['contrasena']?>"></input>
                                <label>Dirección:</label>
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']?>"></input>
                                <label>Telefono:</label>
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>