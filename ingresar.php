<?php  
$nom='';
$user='';
$contra='';
require "database.php";
$nomb=$_POST['nombre1'];
$user = $_POST['email'];
$conteni = $_POST['content'];
$consulta="INSERT INTO registro (nombre,email,contenido) VALUES ('$nomb','$user','$conteni')";
$resultado=mysqli_query($conectar,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet"  href="Diseño/CSS/style.css">
</head>
<body>
	<?php require 'Codigo/header.php' ?>
	
	</span>
	<form class="" action="ingresar.php" method="post">
		<input type="text" name="nombre1" placeholder="Ingrese su nombre">
		<input type="text" name="email" placeholder="Ingrese el correo de destino">
		<input type="text" name="content" placeholder="Ingrese el mensaje a escribir">
		<input type="submit" value="Ingresar" >
		</form>
</body>
</html>