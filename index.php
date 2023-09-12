<?php
header("Content-Type: application/json");
require_once "modelos/conexion.php";
require_once "controladores/pacientes.controlador.php";

$request_method = $_SERVER["REQUEST_METHOD"];

$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Rutas y controladores

switch($request_method){

    case "GET": 
        $paciente = ControladorPacientes::handleRequest($request_method, $process="all");
        if (!empty($paciente)) {
            http_response_code(200);
            echo json_encode($paciente);
        } else {
            http_response_code(403);
            echo json_encode(["respuesta" => "No se encuentra ningun Paciente!"]);
        }
        break;

    case "POST" && !empty($data) && sizeof($data) > 5:
        $paciente = ControladorPacientes::handleRequest($request_method, $process="create");
        if (!empty($paciente)) {
            http_response_code(200);
            echo json_encode($paciente);
        } else {
            http_response_code(403);
            echo json_encode(["respuesta" => "El Paciente no se pudo crear!"]);
        }
        break;

    case "POST" && !empty($data) && sizeof($data) == 2:
        $paciente = ControladorPacientes::handleRequest($request_method, $process="search");
        if (!empty($paciente)) {
            http_response_code(200);
            echo json_encode($paciente);
        } else {
            http_response_code(403);
            echo json_encode(["respuesta" => "El Paciente no se encontro!"]);
        }
        break;
}