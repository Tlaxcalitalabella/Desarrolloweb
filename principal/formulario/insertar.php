<?php

//conectarnos Con el servidor
require("insertar.php");

$conexion = mysqli_connect("localhost", "root", "", "nomada"); 

mysqli_set_charset($conexion, "utf8");
//recuperar las variables del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = $_POST["fecha"];
//verificamos la subida del archivo
if($_FILES["archivo"]) {
$nombre_base = basename($_FILES['archivo']['name']);
$nombre_final = date("d-m-y"). "-" . $nombre_base;
$ruta = "archivos/" . $nombre_final;
$subirarchivo = move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
if($subirarchivo){
	$insertar = "INSERT INTO datos(nombre, email, fecha, archivo) VALUES ('$nombre', '$email', '$fecha', '$ruta')";
	$resultado = mysqli_query($conexion, $insertar);
	if($resultado){
		//en la parte de index.html va el nombre de la pagina principal//
		echo "<script>alert('Se ha enviado su letra'); window.location='index.html'</script>";
	} else {
		printf("Errormessage: %s\n", mysqli_error($conexion));
	} 
	}
}


