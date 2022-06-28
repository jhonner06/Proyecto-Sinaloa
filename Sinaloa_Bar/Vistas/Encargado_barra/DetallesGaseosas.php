<?php 
    include("../../conexion/CONEXION2.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detalles Gaseosas</title>
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
<body  id="body">
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-regular fa-circle-user"></i>
            <h4>Encargado de Barra</h4>
        </div>

        <div class="options__menu">	

            <a href="consultar.html" class="selected">
                <div class="option">
                    <i class="fa-solid fa-magnifying-glass" title="Consultar"></i>
                    <h4>Consultar</h4>
                </div>
            </a>
            
            <!--<a href="#">
                <div class="menu">
                    <i class="fa-regular fa-id-badge" title="Registrar"></i>
                    <li><a href="#">Registrar</a>
                        <ul class="submenu">
                            <li><a href="Entradas.html">Entradas</a></li>
                            <li><a href="Salidas.html">Salidas</a></li>
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
        <button type="button" style="transform: translate(335px);" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Añadir producto</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="col-md-3">
                            <form action="../../funciones/funcGaseosaEB/INSERTAR3.php" method="POST">
                                
                                <input style="WIDTH: 300px"size=32 trantype="number" class="form-control mb-3" name="id_producto" placeholder="Codigo Producto">
                                <input style="WIDTH: 300px"size=32 type="number" class="form-control mb-3" name="cantidad" placeholder="Cantidad de producto ha ingresar">
                                <!--<input style="WIDTH: 300px"size=32 type="number" class="form-control mb-3" name="stock_max" placeholder="stock_max">
                                <input style="WIDTH: 300px"size=32 type="number" class="form-control mb-3" name="stock_min" placeholder="stock_min">-->
                                <input style="WIDTH: 300px"size=32 type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Producto">
                                <div>
                                <label style="WIDTH: 300px"size=32><b>Marca del producto</label>
                                <select name="fk_marca" id="fk_marca">
                                <option value="1">Bavaria</option>
                                <option value="2">Industria licorera de caldas</option>
                                <option value="3">Licorera de cundinamarca</option>
                                <option value="4">Black & White</option>
                                <option value="5">AJE</option>
                                <option value="6">Postobon</option>
                                <option value="7">British American Tobacco</option>
                                <option value="8">Grupo Modelo</option>
                                <option value="9">Fabrica De Licores De Antioquia</option>
                                <option value="10">Central Cervecera De Colombia</option>
                                <option value="11">Cerveceria AB InBev</option>
                                <option value="12">Coca-Cola FEMSA</option>
                                <option value="13">Monster Energy Colombia</option>
                                <option value="14">Quala</option>
                                <option value="15">Buchanan</option>
                                <option value="16">Bodega Trapiche</option>
                                <option value="17">Don Julio</option>
                                <option value="18">VSPT Wine Group</option>
                                <option value="19">Wine Brands</option>
                                <option value="20">Bodega Santarita</option>
                                <option value="21">Diageo Bar Academy</option>
                                <option value="22">Finca Las Moras</option>
                                <option value="23">Bacardi</option>
                                <option value="24">Jack Daniels</option>
                                <option value="25">Jose Cuervo</option>
                                <option value="26">Macallan</option>
                                <option value="27">Campari</option>
                                <option value="28">Tequila Herradura</option>
                                <option value="29">Beam Suntory</option>
                                </select>
                                </div><br>
                                <div>
                                <label style="WIDTH: 300px"size=32><b>Tipo de producto</label>
                                <select name="fk_tproduc" id="fk_tproduc">
                                <option value="1">Cerveza</option>
                                <option value="2">Aguardiente</option>
                                <option value="3">Whisky</option>
                                <option value="4">Agua</option>
                                <option value="5">Gaseosas</option>
                                <option value="6">Cigarrillos</option>
                                <option value="7">Bebida Energizante</option>
                                <option value="8">Tequila</option>
                                <option value="9">Vino</option>
                                <option value="10">Vodka</option>
                                <option value="11">Aperitivo</option>
                                <option value="12">Jugo</option>
                                <option value="13">Bebida Hidratante</option>
                                </select>
                                </div><br>
                                <input style="WIDTH: 300px"size=32 type="number" class="form-control mb-3" name="precio_unitario" placeholder="Precio">
                                
                                <input type="submit" class="btn btn-outline-success"><p>
                            </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span></span>
                        <h1>Gaseosas</h1>
                    </div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span></span></div>
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
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D1F2EB;
}
</style>
            <div class="container mt-5">
                <div class="row"> 
                    
                    <div class="col-md-8">
                        <table class="table" >
                            <thead class="table-success table-striped" >
                                <tr>
                                    <div text-align>
                                </div>
                                    <th>Codigo Producto </th>
                                    <th>Cantidad de producto ha ingresar</th>
                                    <!--<th>stock_max</th>
                                    <th>stock_min</th>-->
                                    <th>Nombre Producto</th>
                                    <th>Marca de Producto</th>
                                    <th>Tipo de producto</th>
                                    <th>Precio</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                        <tr>
                                            <th><?php  echo $row['id_producto']?></th>
                                            <th><?php  echo $row['cantidad']?></th>
                                            <!--<th><?php  echo $row['stock_max']?></th>
                                            <th><?php  echo $row['stock_min']?></th>--> 
                                            <th><?php  echo $row['nombre']?></th> 
                                            <th><?php  echo $row['fk_marca']?></th> 
                                            <th><?php  echo $row['fk_tproduc']?></th>
                                            <th><?php  echo $row['precio_unitario']?></th>
                                            <th><a href="../../funciones/funcGaseosaEB/ACTUALIZAR3.php?id=<?php echo $row['nombre'] ?>" class="btn btn-outline-secondary">Editar</a></th>
                                            <th><a href="../../funciones/funcGaseosaEB/DELETE3.php?id=<?php echo $row['nombre'] ?>" class="btn btn-outline-danger">Eliminar</a></th>                                        
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