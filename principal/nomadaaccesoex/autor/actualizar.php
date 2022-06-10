<?php 
    include("conexion.php");
    $con=conectar();

$NID_AUTOR=$_GET['NID_AUTOR'];

$sql="SELECT * FROM TBL_AUTOR WHERE NID_AUTOR='$NID_AUTOR'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="NID_AUTOR" value="<?php echo $row['NID_AUTOR']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="NID_AUTOR" placeholder="ID_Autor" value="<?php echo $row['NID_AUTOR']  ?>">
                                <input type="text" class="form-control mb-3" name="CNOMBRE_REAL" placeholder="Nombre real" value="<?php echo $row['CNOMBRE_REAL']  ?>">
                                <input type="text" class="form-control mb-3" name="CNOMBRE_ARTISTICO" placeholder="Nombre artistico" value="<?php echo $row['CNOMBRE_ARTISTICO']  ?>">
                                <input type="text" class="form-control mb-3" name="CCORREO_ELECTRONICO" placeholder="Email" value="<?php echo $row['CCORREO_ELECTRONICO']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>