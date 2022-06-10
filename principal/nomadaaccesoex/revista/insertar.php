<?php
include("conexion.php");
$con=conectar();

$NID_REVISTA=$_POST['NID_REVISTA'];
$DFECHA_PUBLICACION=$_POST['DFECHA_PUBLICACION'];
$CTITULO=$_POST['CTITULO'];
$NNUMERO_REVISTA=$_POST['NNUMERO_REVISTA'];



$sql="INSERT INTO TBL_REVISTA VALUES('$NID_REVISTA','$DFECHA_PUBLICACION','$CTITULO','$NNUMERO_REVISTA')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: revista.php");
    
}else {
}
?>