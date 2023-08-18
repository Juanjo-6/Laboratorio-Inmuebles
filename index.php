<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Prime Realty</title>
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
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
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


<section class="image-section py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-12 text-center">
        <img src="imas/logo2.png" alt="Imagen 1" class="img-fluid rounded img-enlarge image-animation">
      </div>
      <div class="col-md-6 col-12 text-center">
        <img src="imas/ImagenAyudaInicio.png" alt="Imagen 1" class="img-fluid rounded img-enlarge image-animation">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <p class="slogan">Tu llave hacia un mundo de hogares extraordinarios</p>
      </div>
    </div>
  </div>
</section>

<section class="project-details-section py-5 text-white creative-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="imas/imagenInicio2.png" alt="Imagen 2" class="img-fluid rounded project-image">
      </div>
      <div class="col-md-6">
        <h2>Detalles del Proyecto</h2>
        <p><i class="fas fa-check-circle"></i> Bienvenido a Prime Realty - Tu llave hacia un mundo de hogares extraordinarios</p>
        <p><i class="fas fa-check-circle"></i> Tu Fuente Confiable para Propiedades Inmobiliarias</p>
        <p><i class="fas fa-check-circle"></i> Una plataforma fácil de usar que te permite navegar por una amplia gama de inmuebles con facilidad.</p>
        <p><i class="fas fa-check-circle"></i> Recursos educativos y guías que te ayudarán a comprender mejor el proceso de compra o alquiler. </p>
      </div>
    </div>
  </div>
</section>

<section class="carousel-section py-5">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="2500">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      <!-- Agrega más elementos <li> para más imágenes -->
    </ol>

    <!-- Imágenes del carrusel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imas/imagenCarrusel1.jpg" alt="Imagen 1">
      </div>
      <div class="carousel-item">
        <img src="imas/imagenCarrusel2.jpg" alt="Imagen 2">
      </div>
      <div class="carousel-item">
        <img src="imas/imagenCarrusel3.jpg" alt="Imagen 3">
      </div>

      <!-- Agrega más elementos <div class="carousel-item"> para más imágenes -->
    </div>

    <!-- Controles del carrusel -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
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