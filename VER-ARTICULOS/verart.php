<?php
include("conex.php");
$nom_tabladb = "SELECT * FROM nom_tabladb";

?>


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

<div class= "container">

    <div>
    <h1 class="title"><?php echo $row['CNOMBRE_ARTICULO']; ?></h1>
        <h4><?php echo $row['DFECHA_PUBLICACION']; ?></h4>
        <img src="data:image/png;base64, <?php echo base64_encode($row['IMAGEN_ARTICULO']); ?>">
        <p><?php echo $row['CDESCRIPCION_ARTICULO']; ?></p>
        <h3><?php echo $row['NID_AUTOR']; ?></h3>
        <h3><?php echo $row['NID_RAMA_CONOCIMIENTO']; ?></h3>
        <h3><?php echo $row['NID_ARTICULO']; ?></h3>
        <h3><?php echo $row['NID_REVISTA']; ?></h3>
        <h3><?php echo $row['NID_IMGAGEN']; ?></h3>


        <a href= "#">INICIO</a>
   
    </div>
</body>
</html>
