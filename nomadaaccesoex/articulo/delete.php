<?php

include("conexion.php");
$con=conectar();

$NID_ARTICULO=$_GET['NID_ARTICULO'];

$sql="DELETE FROM TBL_ARTICULO  WHERE NID_ARTICULO='$NID_ARTICULO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>