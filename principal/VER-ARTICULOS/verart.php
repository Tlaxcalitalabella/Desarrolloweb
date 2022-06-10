
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTICULO</title>
    <link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body>
<?php
require './funciones.php';

$con = conectarbd();
if(!$con){
    echo'No se pudo establecer la conexion: '.mysql_error();
}else{
    $base=mysql_select_db('nom_based',$link);
    if(!$base){
        echo'No se encontro la base de datos: '.mysql_error();
    }else{
        $sql = 'SELECT * FROM `TBL_ARTICULO`';
        $ejecuta_sentencia = mysql_query($sql);
        if(!$ejecuta_sentencia){
            echo'Hay un error en la sentencia sql: '.$sql;
        }else{
            $datos = mysql_fetch_array($ejecuta_sentencia);
        }
    }
} ?>

 <?php
 echo$datos[`CNOMBRE_ARTICULO`]; 
 echo$datos[`DFECHA_PUBLICACION`];
 echo$datos[`CDESCRIPCION_ARTICULO`];
 echo$datos[`NID_AUTOR`];
 echo$datos[`NID_RAMA_CONOCIMIENTO`];
 echo$datos[`NID_ARTICULO`];
 echo$datos[`NID_REVISTA`];
 echo$datos[`NID_IMGAGEN`];
?>
</body>
</html>