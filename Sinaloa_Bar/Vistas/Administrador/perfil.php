<?php 
    include("../../conexion/CONEXION1.php");
    $con=conectar();

    $sql="SELECT *  FROM persona";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Perfiles</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../../assets/css/untitled.css">
    <link rel="stylesheet" href="../../css/estilos1.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-regular fa-circle-user"></i>
            <h4>Administrador</h4>
        </div>

        <div class="options__menu">	

            <a href="consultar.html">
                <div class="option">
                    <i class="fa-solid fa-magnifying-glass" title="Consultar"></i>
                    <h4>Consultar</h4>
                </div>
            </a>

            <a href="#">
                <div class="option" class="selected">
                    <i class="fa-regular fa-id-badge" title="Perfiles"></i>
                    <h4>Perfiles</h4>
                </div>
            </a>
            <!--<a href="#">
                <div class="menu">
                    <i class="fa-regular fa-id-badge" title="Registrar"></i>
                    <li><a href="#">Registrar</a>
                        <ul class="submenu">
                            <li><a href="../../Entradas.html">Entradas</a></li>
                            <li><a href="../../Salidas.html">Salidas</a></li>
                        </ul>
                    </li>
                </div><br>
            </a><br>-->
            
            <a href="../../Index.html">
                <div class="option">
                    <i class="fa-solid fa-arrow-right-from-bracket" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>

            

        </div>

    </div>

        <main>
        <button type="button" style="transform: translate(335px);"class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Agregar empleado</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="col-md-3">
                            <form action="../../funciones/funcPerfil/insertar.php" method="POST">
                                <div>
                                <select name="pk_fk_tdoc" id="pk_fk_tdoc">
                                <option value="CC">Cedula Ciudadania</option>
                                <option value="CE">Cédula de Extranjería</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                </select>
                                </div><br>
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="id_persona" placeholder="Número de Cédula">
                                <input style="WIDTH: 300px"size=32 type="password" class="form-control mb-3" name="contrasena" placeholder="Contraseña">
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="p_nombre" placeholder="Primer Nombre">
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="s_nombre" placeholder="Segundo Nombre">
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="p_apellido" placeholder="Primer Apellido">
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="s_apellido" placeholder="Segundo Aellido">
                                <div>
                                <select name="fk_rol" id="fk_rol">
                                <option value="1">Administrador</option>
                                <option value="2">Encargado de barra</option>
                                </select>
                                </div><br>
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                <input style="WIDTH: 300px"size=32 type="number" class="form-control mb-3" name="telefono" placeholder="Télefono">
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                                
                                <input type="submit" class="btn btn-primary"><p>
                            </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span></span>
                        <h1>Perfiles</h1>
                    </div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
   

    <script>
        $(document).ready( function () {
    $('#EntradasA').DataTable({
        orderCellsTop: true,
        fixedHeader: true
    });
} );
</script>
<script>
    var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {

var button = event.relatedTarget

var recipient = button.getAttribute('data-bs-whatever')

var modalTitle = exampleModal.querySelector('.modal-title')
var modalBodyInput = exampleModal.querySelector('.modal-body input')

modalTitle.textContent = 'Ingrese datos ' + recipient
modalBodyInput.value = recipient
})

</script>
            <div class="container mt-5">
                <div class="row"> 
                    
                    <div class="col-md-8">
                        <table class="table" >
                            <thead class="table-success table-striped" >
                                <tr>
                                    <div text-align>
                                    <th>Tipo Documento</th>
                                </div>
                                    <th>Número de Cédula</th>
                                    <th type="password">Contraseña</th>
                                    <th>Primer Nombre</th>
                                    <th>Segundo Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Rol</th>
                                    <th>Direccón</th>
                                    <th>Télefono</th>
                                    <th>Sexo</th>
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
                                            <th><a href="../../funciones/funcPerfil/actualizar.php?id=<?php echo $row['id_persona'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="../../funciones/funcPerfil/delete.php?id=<?php echo $row['id_persona'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                        </tr>
                                    <?php 
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>  
        </div>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/js/theme.js"></script>
    </main>
        
    <script src="../../js/script.js"></script>
         
</body>

</html>