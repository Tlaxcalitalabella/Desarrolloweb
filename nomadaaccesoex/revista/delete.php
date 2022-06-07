<?php

include("conexion.php");
$con=conectar();

$NID_ARTICULO=$_GET['NID_REVISTA'];

$sql="DELETE FROM TBL_REVISTA  WHERE NID_REVISTA='$NID_REVISTA'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: revista.php");
    }
?>