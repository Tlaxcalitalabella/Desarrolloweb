<?php

include("conexion.php");
$con=conectar();

$NID_REVISTA=$_POST['NID_REVISTA'];
$DFECHA_PUBLICACION=$_POST['DFECHA_PUBLICACION'];
$CTITULO=$_POST['CTITULO'];
$NNUMERO_REVISTA=$_POST['NNUMERO_REVISTA'];

$sql="UPDATE TBL_REVISTA  SET  NID_REVISTA='$NID_REVISTA',DFECHA_PUBLICACION='$DFECHA_PUBLICACION',CTITULO='$CTITULO',NNUMERO_REVISTA='$NNUMERO_REVISTA'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: revista.php");
    }
?>