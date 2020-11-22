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
          <a class="navbar-brand" href="home.php">Biblioteca</a>
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

    <section class="container my-5">
      <h2 class="text-center my-4">Ingresar Usuario</h2>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 offset-md-3">
          <form action="modulos/ingresarUsuario.php" method="POST">
            <div class="form-group">
              <input name="nombre_usuario" type="text" class="form-control" placeholder="Nombre de usuario" required="">
            </div>
            <div class="form-group">
              <input name="nombres" type="text" class="form-control" placeholder="Nombres" required="">
            </div>
            <div class="form-group">
              <input name="apellidos" type="text" class="form-control" placeholder="Apellidos" required="">
            </div>
            <div class="form-group">
              <input name="especialidad" type="text" class="form-control" placeholder="Especialidad" required="">
            </div>
            <div class="form-group">
              <input name="nivel" type="text" class="form-control" placeholder="Nivel" required="">
            </div>
            <div class="form-group">
              <input name="seccion" type="text" class="form-control" placeholder="Sección" required="">
            </div>
            <div class="form-group">
              <input name="carnet" type="text" class="form-control" placeholder="Carnet" required="">
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </section>
	

	
</body>
</html>