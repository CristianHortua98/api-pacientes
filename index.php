<?php
header("Content-Type: application/json");
require_once "modelos/conexion.php";
require_once "controladores/pacientes.controlador.php";

$request_method = $_SERVER["REQUEST_METHOD"];
$url_elements = explode("/", $_GET["url"]);

// Rutas y controladores
switch ($url_elements[0]) {
    case "pacientes":
        $paciente = ControladorPacientes::handleRequest($request_method, $url_elements);
        if(!empty($paciente)){
            http_response_code(200);
            echo json_encode($paciente);
        }else{
            http_response_code(403);
            echo json_encode(["respuesta" => "Algo salio mal, no se completo el proceso!"]);
        }
        break;
    default:
        http_response_code(404);
        echo json_encode(["error" => "Recurso no encontrado"]);
}