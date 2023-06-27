<?php
//Cabeceras CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: GET,POST,PUT,PATCH,DELETE');
header("Access-Control-Max-Age: 86000");
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Requested-With');

//Generador de reporte
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  header('HTTP/1.1 200 OK');
  exit();
}

function conexion() {
    $conexion = mysqli_connect("localhost", "root", "","backend");
    return $conexion;
}

$con = conexion();
