<?php

require_once "modelos/pacientes.modelo.php";

class ControladorPacientes{

    static public function handleRequest($method, $url_elements) {
        // Lógica para manejar solicitudes GET, POST, PUT, DELETE, etc.
        // Consulta la base de datos y genera respuestas JSON apropiadas.

        //VER
        if($method === "GET" && $url_elements == "search"){

            $datoBusqueda = $url_elements[1];

            $pacienteInfo = ModeloPacientes::mdlObtenerPaciente($datoBusqueda);

            if(!empty($pacienteInfo)){

                return $pacienteInfo;

            }else{

                return ["respuesta" => "Paciente no encontrado!"];

            }

        }else if($method === "POST" && isset($url_elements[1]) && $url_elements[1] === "create"){

            //var_dump($_POST);

            $input = file_get_contents("php://input");
            $data = json_decode($input, true);

            
            $crear = ModeloPacientes::mdlCrearPaciente($data);

            //echo json_encode(["respuesta" => "Correcto!", "info" => $data]);

            if($crear == "ok"){

                return ["respuesta" => "El Paciente se creo correctamente!"];

            }else{

                return ["respuesta" => $crear];

            }

        }else if($method === "GET"){

            $pacientes = ModeloPacientes::mdlObtenerPacientes();

            if(!empty($pacienteInfo)){

                return $pacienteInfo;

            }else{

                return ["respuesta" => "Paciente no encontrado!"];

            }

        }

    }

} 