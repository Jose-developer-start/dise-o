<?php
//Conexion
include_once "../config/conexion.php";
//Guardando datos de formulario

$nombreLibro = isset($_POST['nombre_libro']) ? $_POST['nombre_libro'] : '';
$autor = isset($_POST['autor']) ? $_POST['autor'] : '';
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';
$tipoLibro = isset($_POST['tipoLibro']) ? $_POST['tipoLibro'] : '';

$query = "INSERT INTO libros (nombre_libro,autor,categoria,tipo_libro) VALUES('$nombreLibro','$autor','$categoria','$tipoLibro')";
if(mysqli_query($conn,$query)){
	echo "<script>alert('Ingresado')</script>";
	header("Location:../home.php");
}
?>