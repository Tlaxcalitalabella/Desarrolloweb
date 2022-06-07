<?php
include("conexion.php");
$con=conectar();

$NID_AUTOR=$_POST['NID_AUTOR'];
$CNOMBRE_ARTISTICO=$_POST['CNOMBRE_ARTISTICO'];
$CNOMBRE_REAL=$_POST['CNOMBRE_REAL'];
$CCORREO_ELECTRONICO=$_POST['CCORREO_ELECTRONICO'];
$BHABILITADO=$_POST['BHABILITADO'];


$sql="INSERT INTO TBL_AUTOR VALUES('$NID_AUTOR','$CNOMBRE_ARTISTICO','$CNOMBRE_REAL','$CCORREO_ELECTRONICO','$BHABILITADO')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: autor.php");
    
}else {
}
?>