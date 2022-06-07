<?php

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM CAT_RAMA_CONOCIMIENTO";
$query-mysqli_query($con.$sql);

$row=mysqli_fetch_array($query);

?>