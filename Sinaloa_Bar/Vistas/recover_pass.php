<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../css/estilosrecuperar.css">
    <title>Recuperar contraseña</title>
</head>
<body>
    <div class="center_1">
        <h1>Recuperación de Contraseña</h1>
        <form action="../funciones/RecuperarContrasena.php" method="post">
            <div>
                <font face="Comic Sans MS"><label>Tipo de documento</label></font><br>
                <font face="Comic Sans MS"><select name="tdoc" id="tdoc">
                    <option value="CC">Cedula de Ciudadania</option>
                    <option value="CE">Cedula de Extranjeria</option>
                    <option value="TI">Tarjeta de Identidad</option>
                </select></font>
            </div>
            <div class="txt_field">
                <input type="number" name="id_persona" required>
                <span></span>
                <label>N° de documento</label>
            </div>
            <div>
                <font face="Comic Sans MS"><button type="submit" class="btn btn-outline-primary">Validar&nbsp&nbsp&nbsp<i class='fas fa-check-square' style='font-size:18px'></i></button></font>&nbsp&nbsp&nbsp
                <font face="Comic Sans MS"><a href="../Index.html" type="submit" class="btn btn-outline-secondary">Regresar&nbsp&nbsp&nbsp<i class='fas fa-reply' style='font-size:18px'></i></a></font><p><br>
            </div>
        </form>
    </div>
</body>
</html>