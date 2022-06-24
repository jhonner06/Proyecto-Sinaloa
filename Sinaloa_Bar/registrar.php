<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/estilosRegistrar.css">
</head>
<body>
    <main>
        <form action="insertar.php" class="formulario" id="formulario">
        <div class="formulario__grupo" id="grupo__fk_pk_tdoc" name="pk_fk_tdoc">
                <label for="pk_fk_tdoc" class="formulario__label" name="pk_fk_tdoc">Tipo de Documento</label>
                <select type="pk_fk_tdoc" class="formulario__input" name="pk_fk_tdoc">
                <font face="Comic Sans MS"><option value="pk_fk_tdoc">Cédula de Ciudadania</option></font>
                <font face="Comic Sans MS"><option value="pk_fk_tdoc">Tarjeta de Identidad</option></font>
                <font face="Comic Sans MS"><option value="pk_fk_tdoc">Cédula de Extranjería</option></font>
                </select>
            </div>

            <div class="formulario__grupo" id="grupo__id_usuario" name="id_persona">
                <label for="id_persona" class="formulario__label" name="id_persona">Número de documento</label>
                <div class="formulario__grupo-input" name="id_persona">
                    <input type="number" class="formulario__input" name="id_persona" id="id_persona" placeholder="Numero de documento">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__password" name="contrasena">
                <label for="contrasena" class="formulario__label" name="contrasena">Contraseña</label>
                <div class="formulario__grupo-input" name="contrasena">
                    <input type="password" class="formulario__input" name="contrasena" id="contrasena">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__password" name="p_nombre">
                <label for="p_nombre" class="formulario__label" name="p_nombre">Primer Nombre</label>
                <div class="formulario__grupo-input" name="p_nombre">
                    <input type="text" class="formulario__input" name="p_nombre" id="p_nombre">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__password" name="s_nombre">
                <label for="s_nombre" class="formulario__label" name="s_nombre">Segundo Nombre</label>
                <div class="formulario__grupo-input" name="s_nombre">
                    <input type="text" class="formulario__input" name="s_nombre" id="s_nombre">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__password" name="p_apellido">
                <label for="p_apellido" class="formulario__label" name="p_apellido">Primer Apellido</label>
                <div class="formulario__grupo-input" name="p_apellido">
                    <input type="text" class="formulario__input" name="p_apellido" id="p_apellido">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__password" name="s_apellido">
                <label for="s_apellido" class="formulario__label" name="s_apellido">Segundo Apellido</label>
                <div class="formulario__grupo-input" name="s_apellido">
                    <input type="text" class="formulario__input" name="s_apellido" id="s_apellido">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__fk_pk_tdoc" name="fk_rol">
                <label for="fk_rol" class="formulario__label" name="fk_rol">Rol</label>
                <select type="fk_rol" class="formulario__input" name="fk_rol">
                <font face="Comic Sans MS"><option value="fk_rol">Administrador</option></font>
                <font face="Comic Sans MS"><option value="fk_rol">Encargado de Barra</option></font>
                </select>
            </div>
            
            <div class="formulario__grupo" id="grupo__dir_us" name="direccion">
                <label for="direccion" class="formulario__label" name="direccion">Dirección</label>
                <div class="formulario__grupo-input" name="direccion">
                    <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Direccion">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__tel_us" name="telefono">
                <label for="telefono" class="formulario__label" name="telefono">Numero Telefono</label>
                <div class="formulario__grupo-input" name="telefono">
                    <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="Numero Telefono">
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__rest_password" name="sexo">
                <label for="sexo" class="formulario__label" name="sexo">Sexo</label>
                <div class="formulario__grupo-input" name="sexo">
                    <input type="text" class="formulario__input" name="sexo" id="sexo">
                </div>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
            </div>

        </form>
    </main>
</body>
</html>


