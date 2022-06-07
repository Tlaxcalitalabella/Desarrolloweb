<?php

include("conexion.php");
$con=conectar();

$NID_RAMA_CONOCIMIENTO=$_POST['NID_RAMA_CONOCIMIENTO'];
$CNOMBRE_RAMA=$_POST['CNOMBRE_RAMA'];


$sql="UPDATE CAT_RAMA_CONOCIMIENTO SET  NID_RAMA_CONOCIMIENTO='$NID_RAMA_CONOCIMIENTO',CNOMBRE_RAMA='$CNOMBRE_RAMA'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: rama.php");
    }
?>