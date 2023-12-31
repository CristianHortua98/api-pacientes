<?php

require_once "modelos/pacientes.modelo.php";

class ControladorPacientes{

    static public function handleRequest($method, $process) {
        // Lógica para manejar solicitudes GET, POST, PUT, DELETE, etc.
        // Consulta la base de datos y genera respuestas JSON apropiadas.

        //VER
        if($method === "POST" && $process == "search"){

            $input = file_get_contents("php://input");
            $data = json_decode($input, true);

            $pacienteInfo = ModeloPacientes::mdlObtenerPaciente($data);

            if(!empty($pacienteInfo)){

                return $pacienteInfo;

            }else{

                //return ["respuesta" => "Paciente no encontrado!"];
                return $pacienteInfo;

            }

        }else if($method === "POST"&& $process === "create"){

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

        }else if($method === "GET" && $process == "all"){

            $pacientes = ModeloPacientes::mdlObtenerPacientes();

            if(!empty($pacientes)){

                return $pacientes;

            }else{

                return ["respuesta" => "Paciente no encontrado!"];

            }

        }

    }

} 