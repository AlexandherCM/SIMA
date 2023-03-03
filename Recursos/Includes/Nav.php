<!-- Header - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<!DOCTYPE html>
<html>
<head>
  <title>Navbar Creativa y Responsive con Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <style>
    /* Estilos para el fondo de la navbar */
    .navbar-custom {
      background-color: #2e2e2e;
    }
    
    /* Estilos para el botón hamburguesa */
    .navbar-toggler {
      border-color: transparent;
      color: #fff;
    }
    
    /* Estilos para el texto de los enlaces */
    .navbar-nav a {
      color: #fff;
    }
    
    /* Estilos para el botón de búsqueda */
    .navbar-custom .form-inline .btn {
      background-color: #ff5722;
      color: #fff;
    }
    
    /* Estilos para el dropdown */
    .dropdown-menu {
      background-color: #2e2e2e;
    }
    
    /* Estilos para los enlaces del dropdown */
    .dropdown-menu a {
      color: #fff;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">Mi Navbar Creativa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Servicios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Servicio 1</a>
            <a class="dropdown-item" href="#">Servicio 2</a>
            <a class="dropdown-item" href="#">Servicio 3</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Más servicios</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Footer - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
