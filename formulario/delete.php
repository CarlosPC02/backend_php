
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
    
    $sql = "DELETE FROM `formulario` WHERE `formularioId`=".$_GET['formularioId'];
    if(mysqli_query($con,$sql)){        
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "error"));
    }
}    
   
?>