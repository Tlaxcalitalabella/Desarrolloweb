<?php

include("conexion.php");
$con=conectar();

$NID_ARTICULO=$_GET['NID_RAMA_CONOCIMIENTO'];

$sql="DELETE FROM CAT_RAMA_CONOCIMIENTO  WHERE NID_RAMA_CONOCIMIENTO='$NID_RAMA_CONOCIMIENTO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rama.php");
    }
?>