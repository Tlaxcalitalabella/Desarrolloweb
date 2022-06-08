<?php

require './funciones.php';

$con=conectarbd();

var_dump($_POST);

$NID_ARTICULO=$_POST;

$sql="DELETE FROM CAT_RAMA_CONOCIMIENTO  WHERE NID_RAMA_CONOCIMIENTO='$NID_RAMA_CONOCIMIENTO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rama.php");
    }
?>