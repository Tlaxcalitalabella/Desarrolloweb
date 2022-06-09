
<?php
function eliminar($resourceId)
{
    echo $resourceId;
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
}