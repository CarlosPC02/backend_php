<?php
require("../conexion.php"); // importa el archivo de la conexion a la BD

$con = conexion();


error_reporting(E_ALL);
ini_set('display_errors', 1);

//enable cors
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

//check post request
if($_SERVER['REQUEST_METHOD']=="POST") {                            
    $formularioNombre=$_POST["formularioNombre"];
    $formularioUrl=$_POST["formularioUrl"];            
    $formularioFecha=$_POST["formularioFecha"];
    $formularioId=$_POST["formularioId"];
    
    $sql = "UPDATE `formulario` SET `formularioNombre`='$formularioNombre',`formularioUrl`='$formularioUrl',`formularioFecha`='$formularioFecha' WHERE `formularioId`='$formularioId'";
    if(mysqli_query($con,$sql)){

        $formulario= [
            'formularioNombre' => $formularioNombre,
            'formularioUrl' => $formularioUrl,                                          
            'formularioFecha' => $formularioFecha,                                                                                                  
            'formularioId'    => mysqli_insert_id($con)
        ];

        echo json_encode(array("status" => "success", "code" => 1,"document"=> $formulario));
    } else {
        echo json_encode(array("status" => "error", "code" => 0));
    }
}    
   
?>