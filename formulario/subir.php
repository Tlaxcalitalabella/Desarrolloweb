<?php

include 'lib/connect.php';

$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES ['file']['tmp_name'];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = $_POST["fecha"];
$route = "archivos".$file_name;


move_uploaded_file($file_tmp,$route);

$sql = "INSERT INTO datos(nombre, email, fecha) VALUES ('$nombre', '$email', '$fecha')";

$sql_query = mysqli_query($conn,$sql);

echo "Se subio el archivo"




?>