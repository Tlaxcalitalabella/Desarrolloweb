<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMADA_RAMA</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-3">
                <h1><center>DATOS</center></h1>
            
                <?php 
                   require './funciones_ramas_conocimiento.php';
                   require './funciones.php'; 
                ?>

                <form method='POST' enctype='multipart/form-data'>
                    Subir imagen: <input class ="btn btn-primary" type="file" name='imagen'>
                    <input type='text' class="form-control mb-3" name='nombre'>
                    <input type='submit'class="btn btn-primary" value='Subir'>
                </form>

                <?php 
                $direccion = verificarImagen();
                i_ramas_conocimiento($direccion); 
                ?>
                
            </div>
            <div class="col-md-9">
                <h1> <center>MOSTRAR TABLA</center></h1>
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Nombre_Rama</th>
    
                        </tr>
                    </thead>
                    <script src="./rama_conocimiento.js"></script>
                    <tbody>
                        <?php
                            $lista_ramas = array();
                            $lista_ramas = g_ramas_conocimiento();
                    //           $lista_ramas->CNOMBRE_RAMA_CONOCIMIENTO
                            foreach($lista_ramas as $ramas)
                                    {
                                    ?>
                                            <tr>
                                                <th><button class="btn-opcion" onclick=""><?php  echo $ramas->CNOMBRE_RAMA_CONOCIMIENTO;?></button></th>                                  
                                            </tr>
                                    <?php 
                                        } ?>
                      </tbody>
                                
                                
                </table>
            
            </div>
        </div>
    </div>
</body>
</html>