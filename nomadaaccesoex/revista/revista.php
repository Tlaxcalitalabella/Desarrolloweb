<?php

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM TBL_REVISTA";
$query-mysqli_query($con.$sql);

$row=mysqli_fetch_array($query);

?>