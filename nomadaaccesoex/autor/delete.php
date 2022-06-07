<?php

include("conexion.php");
$con=conectar();

$NID_AUTOR=$_GET['NID_AUTOR'];

$sql="DELETE FROM TBL_AUTOR  WHERE NID_AUTOR='$NID_AUTOR'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: autor.php");
    }
?>