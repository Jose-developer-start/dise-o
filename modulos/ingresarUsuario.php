<?php
//Conexion
include_once "../config/conexion.php";
//Guardando datos de formulario

$nombre_usuario = isset($_POST['nombre_usuario']) ? $_POST['nombre_usuario'] : '';
$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$especialidad = isset($_POST['especialidad']) ? $_POST['especialidad'] : '';
$nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '';
$seccion = isset($_POST['seccion']) ? $_POST['seccion'] : '';
$carnet = isset($_POST['carnet']) ? $_POST['carnet'] : '';

$query = "INSERT INTO registro (nombre_usuario,nombres,apellidos,especialidad,nivel,seccion,carnet) VALUES('$nombre_usuario','$nombres','$apellidos','$especialidad','$nivel','$seccion','$carnet')";

if(mysqli_query($conn,$query)){
  echo "<script>alert('Ingresado')</script>";
  header("Location:../home.php");
}
?>