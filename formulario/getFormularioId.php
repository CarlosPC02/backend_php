<?php

require("../conexion.php");

if(isset($_GET['id'])){
    $id = $_GET ['id'];
}
$formulario;

$sql = " SELECT * FROM `formulario` WHERE formularioId = '$id'";

if($query = mysqli_query($con, $sql)){
    
    $row = mysqli_fetch_assoc($query);
    
    $formulario['formularioNombre'] = $row['formularioNombre'];
    $formulario['formularioUrl'] = $row['formularioUrl'];
    $formulario['formularioFecha'] = $row['formularioFecha'];
    $formulario['formularioId'] = $row['formularioId'];
    
    
    echo json_encode( array ("status" => "success", "code" => 1, "document" => $formulario));

}else{
    echo json_encode( array ("status" => "error", "code" => 0));
}   