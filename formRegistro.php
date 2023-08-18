
<?php

include("connection.php");

$con = connection();

$sql = "SELECT * FROM cliente";
$query=mysqli_query($con,$sql);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imas/logo2.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-D6zCp8vks1tBc8Wt0FVzG4a5cZ7szA4E1PIpSkzJAxCMcZPw4FYw5V5J7VQfaDUb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cliente-Registro</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top navbar-transparent" id="menu">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="imas/logo2.png" alt="PrimeRealty" width="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent"  >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="#">Registros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="Mision_Vision.php">Mision y Vision</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Inmuebles</a></li>
                <li><a class="dropdown-item" href="#">Clientes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sobre nosotros</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled text-white" aria-disabled="true">Otro link</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>



<section id="formulario-registro" class="registration-form-section py-4 formulario-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="titulo-dorado"><i class="fas fa-user icono-dorado"></i> Registro de Cliente e Inmueble</h2>
        <form>
        <div class="form-group">
            <label for="dpi">DPI</label>
            <input type="dpi" id="dpi" class="form-control" placeholder="Ingresa tu DPI">
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" placeholder="Ingresa tu nombre">
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" class="form-control" placeholder="Ingresa tu apellido">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" class="form-control" placeholder="Ingresa tu número de teléfono">
          </div>
          <div class="form-group">
            <label for="tipo-inmueble">Tipo de Inmueble</label>
            <select id="tipo-inmueble" class="form-control">
              <option value="casa">Casa</option>
              <option value="apartamento">Apartamento</option>
              <option value="terreno">Terreno</option>
            </select>
          </div>
          <div class="form-group">
            <label for="estado-inmueble">Estado de Inmueble</label>
            <select id="estado-inmueble" class="form-control">
              <option value="venta">Venta</option>
              <option value="renta">Renta</option>
            </select>
          </div>
          <div class="form-group">
            <label for="direccion">Dirección del Inmueble</label>
            <input type="text" id="direccion" class="form-control" placeholder="Ingresa la dirección del inmueble">
          </div>
          <button type="submit" class="btn btn-outline-primary">Registrate</button>
        </form>
      </div>
    </div>
    <div class="cliente">
        <center><h2>Registrados</h2></center>
        <center><table class="tablaForm">
            <thead>
                  <th>DPI</th>
                     <th>Nombre</th>
                    <th>Apellido</th>  
                    <th>Numero Telefono</th>
                    <th>Tipo Inmueble</th>
                    <th>Estado Inmueble</th>
                    <th>Direccion Inmueble</th>
            </thead>
           
            <tbody>
                <!-- para acceder a la tabla y los registros  -->
                <?php
                    $query = mysqli_query($con, $sql);
                 while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=  $row['dpi'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['apellido'] ?></td>
                        <td><?= $row['telefono'] ?></td>
                       <!-- pasando el parametro id -->
                        <td><a href="update.php?id=<?= $row['dpi'] ?>" class="cliente">Editar</a></td>
                        <td><a href="delete_user.php?id=<?= $row['dpi'] ?>" class="cliente" >Eliminar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table></center>
    </div>
  </div>
</section>



<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="imas/logo2.png" alt="Logo" class="footer-logo">
        <p>Tu llave hacia un mundo de hogares extraordinarios</p>
      </div>
      <div class="col-md-4">
        <h4>Contacto</h4>
        <p>Email: info@empresa.com</p>
      </div>
      <div class="col-md-4">
        <h4>Síguenos en redes</h4>
        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>


 
    <script src="script.js"></script>
</body>
</html>