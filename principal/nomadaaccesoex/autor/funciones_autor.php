<?php 
    function i_autores()
    {  
        $con = conectarbd();
        echo "uwu aqui llego";
        $nombre = $_POST['CNOMBRE_ARTISTICO'];
        $nombre_real = $_POST['CNOMBRE_REAL'];
        $correo_electronico = $_POST['CCORREO_ELECTRONICO'];
        $id = $con->insert_id;
        $bool = 1;
        $query = $con->prepare("INSERT INTO `TBL_AUTOR`(`CNOMBRE_ARTISTICO`, `CNOMBRE_REAL`, `BHABILITADO`, `NID_AUTOR`, `CCORREO_ELECTRONICO`) VALUES (?,?,?,?,?)");
        $query->bind_param('ssiis',$nombre,$nombre_real,$bool,$id,$correo_electronico);
        $query->execute();
        $query->close();
        $con->close();
    }

    function g_autores() {
        $con = conectarbd();
        $sql = "SELECT * FROM `TBL_AUTOR`;";
        $query = $con->query($sql);
        $lista_autores = array();
        $lista_autores= convertir($query);
        return $lista_autores;
    
    }
?>