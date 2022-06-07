<?php 

function conectarbd() {
    $user="mroot";
    $pass="MacDerDg2021";
    $server="localhost";
    $db="RevistaNomadasDelSaber";
    $con=mysqli_connect($server,$user,$pass,$db);

    if (!$con)
    {
        die("No hay conexion".mysqli_connect_errno());
    }

    return $con;
}

function verificarImagen()
{
    $resultado = NULL;

    $name =$_FILES['imagen']['name'];
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $size = $_FILES['imagen']['size'];
    $error = $_FILES['imagen']['error'];
    $max_size = 1024 * 1024 * 1;
    $type = $_FILES['imagen']['type'];


    if($error)
    {
        $resultado = "Ha ocurrido un error";
    }
    else if ($size > $max_size)
    {
        $resultado = "El tamaño supera el máximo permitido";
    }
    else if ($type != 'image/png' && $type != 'image/jpg' && $type != 'image/gif') 
    {
        $resultado = "Formato no soportado";
    }
    else 
    {
        $cuts = 'img/'.$name; 
        echo $cuts;           
        echo $tmp_name;    
        if(move_uploaded_file($tmp_name,$cuts))
        {
            $resultado = "La imagen fue cargada exitosamente";
        }
        else               
        {                
            $resultado = "Ha ocurrido un error aqui";
        }
    }

    echo $resultado;
    return $cuts;

}

function convertir($array)
{
    $resultArray = array();
    if(is_object($array))
    {
        while($re = $array->fetch_object()) {
            array_push($resultArray,$re);
        }
    }
    else {
        echo "no es objeto";
    }
    

    return $resultArray;
}
?>