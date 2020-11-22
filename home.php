<?php
  session_start();
  if (!isset($_SESSION['usuario']) and !isset($_SESSION['adminMaster'])){
    header("Location:vistaSesion.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biblioteca Insibo Open Book</title>
	<link rel="stylesheet" href="css/style.css">
	<!---Bootstrap 4.5-->
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">Biblioteca</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="btn btn-danger" href="config/cerrarSesion.php">Cerrar sesión</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!----DISPONIBLE SOLO PARA ADMINISTRADOR--->
  <?php
    if(isset($_SESSION['adminMaster'])):?>
      <section class="container my-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
          <img src="img/Imag.jpg" alt="libros" class="img-thumbnail">
          <a href="vistaIngresarLibro.php" class="btn btn-primary mt-4">Ingresar Libro</a>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
          <img src="img/giphy.gif" alt="usuario" class="img-thumbnail">
          <a href="vistaIngresarUsuario.php" class="btn btn-primary mt-4">Ingresar </a>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-8 offset-md-4">
          <table class="table table-responsive table-striped">
            <thead>
              <tr>
                <th>Nombre de Autor</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Tipo de libro</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </section>
  <?php endif?>
	<!----Vista de los libros para Usuario---->
  <?php
    if(isset($_SESSION['usuario'])):?>
  <section class="container">
    <h1>Libros</h1>
  </section>
  <?php endif?>
	
</body>
</html>