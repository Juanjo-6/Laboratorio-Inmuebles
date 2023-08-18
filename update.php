<?php 
    include("connection.php");
    $con=connection();

    // aca utilizamos el metodo GET porque se pasa un parametro //
    
    $dpi=$_GET['dpi'];
    $sql="SELECT * FROM cliente WHERE dpi='$dpi'";

    $query=mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);

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
    <title>Editar Registro</title>
</head>
<body>
<section id="formulario-registro" class="registration-form-section py-4 formulario-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="titulo-dorado"><i class="fas fa-user icono-dorado"></i> Registro de Cliente e Inmueble</h2>
        <form action="edit.php" method="POST">
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
          <button type="button" class="btn btn-outline-primary">Actualizar datos</button>
        </form>
      </div>
    </div>
</section>
</body>
</html>
<