<?php
    require '/var/www/sites/RevistaNomadasDelSaber/funciones.php';
    
    $con = conectarbd();

    $method = $_SERVER['REQUEST_METHOD'];

    $queryResource = $con->query("SHOW TABLES");
    $allowedResourceType = array();
    while ($re = $queryResource->fetch_object()){
        array_push($allowedResourceType,$re->Tables_in_RevistaNomadasDelSaber);
    }

    $resourceId = $_GET['resource_id'];
    $resourceType = $_GET['resource_type'];
    if ( !in_array( $resourceType, $allowedResourceType ) ) {
        http_response_code( 400 );
        print_r($allowedResourceType);
        echo $resourceType;
        echo json_encode(
            [
                'error' => "$resourceType,is un unkown",
            ]
        );

        die;
    }


    switch( strtoupper( $method ) ) {
        case 'GET':

            switch ($resourceType){
                case 'CAT_RAMA_CONOCIMIENTO': 

                    if (!empty($resourceId))
                    {
                        $query = $con->query("SELECT * FROM `CAT_RAMA_CONOCIMIENTO` WHERE `NID_RAMA_CONOCIMIENTO`= $resourceId;");
                        if ($query->num_rows <1){
                            http_response_code( 400 );
                            echo json_encode(
                                [
                                    'error' => "$resourceId no existe",
                                ]
                                );
        
                                die;
        
                        } else {    
                            $rows['datos'] = array();
        
                            while($r = $query->fetch_object()) {
                                array_push($rows['datos'],$r);
                            }
        
                            echo json_encode(
                                $rows,
                            );
                        }
                        $query->close();
                    } else {
                    $query_rama_conocimiento = $con->query("SELECT * FROM `CAT_RAMA_CONOCIMIENTO`");
                    $result_rama_conocimiento = array();
                    $result_rama_conocimiento = convertir($query_rama_conocimiento);
                    echo json_encode (
                        $result_rama_conocimiento,
                    ); }

                    break;
            }
        
        case 'POST':
            
            $nombre = $_POST['nombre'];
            $imagen = $_FILES['imagen']['tmp_name'];
            $identity = $con->insert_id;
            $query = $con->prepare("INSERT INTO `CAT_RAMA_CONOCIMIENTO` (`NID_RAMA_CONOCIMIENTO`,`CNOMBRE_RAMA_CONOCIMIENTO`,`IMAGEN`,`RUTA_IMAGEN`) VALUES (?,?,?,?) ");
            $query->bind_param('isss',$identity,$nombre,$imagen,$cuts);
            $query->execute();
            $query ->close();
            $con->close();
            break;
        
        case 'DELETE':
            {
                switch ($resourceType){
                    case 'CAT_RAMA_CONOCIMIENTO': 
                        if(!empty($resourceId))
                        {
                            $query = $con->query("SELECT * FROM `CAT_RAMA_CONOCIMIENTO` WHERE `NID_RAMA_CONOCIMIENTO`= $resourceId;");
                            if ($query->num_rows <1){
                                http_response_code( 400 );
                                echo json_encode(
                                    [
                                        'error' => "$resourceId no existe",
                                    ]
                                    );
            
                                    die;
            
                            } else {    

                                $sql="DELETE FROM CAT_RAMA_CONOCIMIENTO  WHERE NID_RAMA_CONOCIMIENTO=$resourceId";
                                $query= mysqli_query($con,$sql);
                                if(!$query)
                                {
                                    echo "algo salió mal";
                                }
                                else {

                                    $rows['datos'] = array();
        
                                    while($r = $query->fetch_object()) {
                                        array_push($rows['datos'],$r);
                                    }
                
                                    echo json_encode(
                                        $rows,
                                    );
                                }
                            
                            }
                            $query->close();
                        }
                        else {
                            echo "no exite id";
                        } 
                    break;
                 }
            }

    }

