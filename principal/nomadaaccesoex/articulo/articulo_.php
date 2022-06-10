<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMADA_ARTICULO</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-3">
                <h1><center>DATOS</center></h1>
                <form method="POST" enctype='multipart/form-data'>

                    <input type="date" class="form__control mb-3 " name="DFECHA_PUBLICACION">
                    <input type="text" class="form-control mb-3" name="CNOMBRE_ARTICULO" placeholder="Nombre del aritículo">
                    <input type="text" class="form-control mb-3" name="CDESCRIPCION_ARTICULO" placeholder="Descripción del artículo">
                    
                    <input type="submit" class="btn btn-primary" value="subir">
                </form>

            </div>
            <div class="col-md-9">
                <h1> <center>MOSTRAR TABLA</center></h1>
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>ID_Artículo</th>
                            <th>Nombre_Artistico</th>
                            <th>Descripción del artículo</th>
                            <th>ID_Autor</th>
                            <th>ID_Rama de conocimiento</th>
                            <th>Fecha de publicación</th>
                            <th>ID_Revista</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NID_ARTICULO']?></th>
                                                <th><?php  echo $row['CNOMBRE_ARTICULO']?></th>
                                                <th><?php  echo $row['CDESCRIPCION_ARTICULO']?></th>
                                                <th><?php  echo $row['NID_AUTOR']?></th>    
                                                <th><?php  echo $row['NID_RAMA_CONOCIMIENTO']?></th>
                                                <th><?php  echo $row['DFECHA_PUBLICACION']?></th>
                                                <th><?php  echo $row['NID_REVISTA']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['NID_ARTICULO'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NID_ARTICULO'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>

            </div>
        </div>
    </div>
</body>
</html>