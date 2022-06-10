<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMADA</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-1">
        <div class="row">
            <div class="form">
                <h1><center>DATOS</center></h1>
                <?php
                       require './funciones.php';
                       require './funciones_autor.php';
                ?>

                <form method="POST" enctype='multipart/form-data'>

                    
                    <input type="text" class="form-control mb-3" name="CNOMBRE_ARTISTICO" placeholder="Nombre artistico">
                    <input type="text" class="form-control mb-3" name="CNOMBRE_REAL" placeholder="Nombre real">
                    <input type="text" class="form-control mb-3" name="CCORREO_ELECTRONICO" placeholder="Email">
                    
                    <input type="submit" class="btn btn-primary">
                </form>

                <?php
            
                    i_autores();
        
                ?>
                    
            </div>
            <div class="col-md-9">
                <h1> <center>MOSTRAR TABLA</center></h1>
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Nombre_Artistico</th>
                            <th>Nombre_Real</th>
                            <th>Email</th>
                            <th>Habilitado/No habilitado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                echo "usu";

                                $lista_autores = array();
                                $lista_autores = g_autores();
                        //           $lista_ramas->CNOMBRE_RAMA_CONOCIMIENTO
                                foreach($lista_autores as $autor)
                                        {
                                        ?>
                                                <tr>
                                                    <th><button id="btnopcion" class="btn-opcion" onclick="obtenId(<?php echo $autor->NID_AUTOR;?>)" ><?php  echo $autor->CNOMBRE_ARTISTICO;?></button></th>                             
                                
                                                    <th><button id="btnopcion" class="btn-opcion" onclick="obtenId(<?php echo $autor->NID_AUTOR;?>)" ><?php  echo $autor->CNOMBRE_REAL;?></button></th>                             
                                                
                                    
                                                    <th><button id="btnopcion" class="btn-opcion" onclick="obtenId(<?php echo $autor->NID_AUTOR;?>)" ><?php  echo $autor->CCORREO_ELECTRONICO;?></button></th>                             
                                    
                                                    <th><button id="btnopcion" class="btn-opcion" onclick="obtenId(<?php echo $autor->NID_AUTOR;?>)" ><?php  echo $autor->BHABILITADO;?></button></th>                             
                                                </tr>
                                                <p></p>
                                        <?php 
                                        } ?>
                                
                                </tbody>
                            </table>

            </div>
        </div>
    </div>
</body>
</html>