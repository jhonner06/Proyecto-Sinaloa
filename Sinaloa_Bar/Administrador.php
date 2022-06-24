<?php 
    include("CONEXION1.php");
    $con=conectar();

    $sql="SELECT *  FROM persona";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/style.css" rel="stylesheet">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="pk_fk_tdoc" placeholder="pk_fk_tdoc">
                                    <input type="text" class="form-control mb-3" name="id_persona" placeholder="id_persona">
                                    <input type="password" class="form-control mb-3" name="contrasena" placeholder="contrasena">
                                    <input type="text" class="form-control mb-3" name="p_nombre" placeholder="p_nombre">
                                    <input type="text" class="form-control mb-3" name="s_nombre" placeholder="s_nombre">
                                    <input type="text" class="form-control mb-3" name="p_apellido" placeholder="p_apellido">
                                    <input type="text" class="form-control mb-3" name="s_apellido" placeholder="s_apellido">
                                    <input type="text" class="form-control mb-3" name="fk_rol" placeholder="fk_rol">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="number" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>pk_fk_tdoc</th>
                                        <th>id_persona</th>
                                        <th type="password">contrasena</th>
                                        <th>p_nombre</th>
                                        <th>s_nombre</th>
                                        <th>p_apellido</th>
                                        <th>s_apellido</th>
                                        <th>fk_rol</th>
                                        <th>direccion</th>
                                        <th>telefono</th>
                                        <th>sexo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['pk_fk_tdoc']?></th>
                                                <th><?php  echo $row['id_persona']?></th>
                                                <th type="password"><?php  echo $row['contrasena']?></th>
                                                <th><?php  echo $row['p_nombre']?></th> 
                                                <th><?php  echo $row['s_nombre']?></th> 
                                                <th><?php  echo $row['p_apellido']?></th> 
                                                <th><?php  echo $row['s_apellido']?></th>
                                                <th><?php  echo $row['fk_rol']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['telefono']?></th>   
                                                <th><?php  echo $row['sexo']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id_persona'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_persona'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>