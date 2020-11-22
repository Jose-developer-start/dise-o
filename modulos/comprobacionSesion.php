<?php
//Conexion
include_once "../config/conexion.php";
//Guardando datos de formulario

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$clave = isset($_POST['clave']) ? $_POST['clave'] : '';
//Usuario
$selectSQL = "SELECT * FROM registro WHERE nombre_usuario='$usuario' AND carnet='$clave'";
//Admnistrador
$selectAdmin = "SELECT * FROM administrador WHERE usuario_admin='$usuario' AND contraseña='$clave'";

$result = mysqli_query($conn,$selectSQL);
//Trae los datos de manera de array
$data = mysqli_fetch_assoc($result);

//ADMIN
$result1 = mysqli_query($conn,$selectAdmin);
//Trae los datos de manera de array
$data1 = mysqli_fetch_assoc($result1);

if (mysqli_num_rows($result) > 0){
	session_start();
	$_SESSION['usuario'] = $data;
	header("Location:../home.php");

}elseif(mysqli_num_rows($result1) > 0){
	//Iniciamos la sessiond de administrador
	session_start();
	$_SESSION['adminMaster'] = $data1;
	header("Location:../home.php");

}else{

	session_start();
	
	$_SESSION['error'] = "error";

	header("Location:../vistaSesion.php");
}


?>