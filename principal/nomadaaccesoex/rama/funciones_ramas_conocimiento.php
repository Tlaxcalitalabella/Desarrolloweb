<?php   

    function i_ramas_conocimiento($cuts) {
        $con = conectarbd();
        $nombre = $_POST['nombre'];
        $imagen = $_FILES['imagen']['tmp_name'];
        $identity = $con->insert_id;
        $query = $con->prepare("INSERT INTO `CAT_RAMA_CONOCIMIENTO` (`NID_RAMA_CONOCIMIENTO`,`CNOMBRE_RAMA_CONOCIMIENTO`,`IMAGEN`,`RUTA_IMAGEN`) VALUES (?,?,?,?) ");
        $query->bind_param('isss',$identity,$nombre,$imagen,$cuts);
        $query->execute();
        $query ->close();
        $con->close();
    }

    function g_ramas_conocimiento() {
        $con = conectarbd();
        $sql = "SELECT * FROM `CAT_RAMA_CONOCIMIENTO`;";
        $query = $con->query($sql);
        $lista_imagenes = array();
        $lista_imagenes= convertir($query);
        return $lista_imagenes;
    
    }

    function d_ramas_conocimiento() {
        $con=conectarbd();
    
        var_dump($_POST);
    
        //  $id=$_POST;
    
        $sql="DELETE FROM CAT_RAMA_CONOCIMIENTO  WHERE NID_RAMA_CONOCIMIENTO='$id'";
        $query= mysqli_query($con,$sql);
        if(!$query)
        {
            echo "algo salió mal";
        }
    }

    function u_ramas_conocimiento() {
        $con = conectarbd();
        $nombre = $_POST['nombre'];
        $imagen = $_FILES['imagen']['tmp_name'];
        $identity = $con->query("SELECT @@IDENTITY FROM `CAT_RAMA_CONOCIMIENTO`;",);
        $id = $identity + 1;
        $query = $con->prepare("INSERT INTO `CAT_RAMA_CONOCIMIENTO` (`NID_RAMA_CONOCIMIENTO`,`CNOMBRE_RAMA_CONOCIMIENTO`,`IMAGEN`) VALUES (?,?,?) ");
        $query->bind_param('iss',$id,$nombre,$imagen);
        $query->execute();
        $query ->close();
        $con->close();
    }
?>