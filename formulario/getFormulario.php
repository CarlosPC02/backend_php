<?php

require("../conexion.php");

$sql = " SELECT * FROM `formulario`";

if($query = mysqli_query($con, $sql)){
    
    while($resultado = mysqli_fetch_assoc($query) ){
        $datos[]= $resultado;
    }
    
    echo json_encode( array ("status" => "success", "code" => 1, "document" => $datos));

}else{
    echo json_encode( array ("status" => "error", "code" => 0));
}   