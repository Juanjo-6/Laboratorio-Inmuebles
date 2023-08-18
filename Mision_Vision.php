<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Realty - Vision y Mision</title>
    <link rel="shortcut icon" href="imas/logo2.png" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-D6zCp8vks1tBc8Wt0FVzG4a5cZ7szA4E1PIpSkzJAxCMcZPw4FYw5V5J7VQfaDUb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
          <a class="nav-link text-white" href="formRegistro.php">Registros</a>
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

<section id="mision-vision" class="mision-vision-section py-4 bg-light" style="margin-bottom: 500px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="titulo-dorado"><i class="fas fa-star icono-dorado"></i> Visión</h2>
          <p class="lead">Convertirnos en la plataforma líder en el mercado inmobiliario, reconocida por brindar servicios de excelencia y una experiencia inigualable a nuestros usuarios.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="titulo-dorado"><i class="fas fa-eye icono-dorado"></i> Misión</h2>
          <p class="lead">Ser la principal fuente de información y servicios confiables en el mercado inmobiliario, conectando compradores y vendedores con soluciones integrales que satisfagan sus necesidades y aspiraciones.</p>
        </div>
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