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
                    <tbody>
                        <?php
                            $lista_ramas = array();
                            $lista_ramas = g_ramas_conocimiento();
                    //           $lista_ramas->CNOMBRE_RAMA_CONOCIMIENTO
                            foreach($lista_ramas as $ramas)
                                    {
                                    ?>
                                            <tr>
                                                <th><button id="btnopcion" class="btn-opcion" onclick="obtenId(<?php echo $ramas->NID_RAMA_CONOCIMIENTO;?>)"><?php  echo $ramas->CNOMBRE_RAMA_CONOCIMIENTO;?></button></th>                             
                                            </tr>
                                            <p></p>
                                    <?php 
                                    } ?>
                            
                      </tbody>
                      che
                </table>

                <div class="repositorio" enctype='multipart/form-data'>
                           <form method="post">
                               <button name="eliminar" id="eliminar" value="" class="btn btn-danger">eliminar</button>
                           </form>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
                crossorigin="anonymous"></script> 
                <script type="text/javascript">

                    function obtenId(id)
                    {
                        console.log(id);
                        $('#eliminar').click( function eliminar(){
                            $.ajax(
                                {
                                    'url': 'http://localhost:8000/CAT_RAMAS_CONOCIMIENTO',
                                    'method': 'DELETE',
                                    'data': {id},
                                    'headers':
                                            {
                                                'accept': 'application/json',
                                                'Access-Control-Allow-Origin':'*'
                                            },
                                    'success': function() {
                                        alert('borrado con éxito');
                                    }
                    
                                });
                            });
                    }
                 </script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>