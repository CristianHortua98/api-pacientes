<?php

require_once "conexion.php";

class ModeloPacientes{

    static public function mdlObtenerPacientes(){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM pacientes");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null;

    }

    static public function mdlObtenerPaciente($data){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM pacientes WHERE CONCAT(tipo_documento,'-',numero_documento) = CONCAT(:tipo_documento,'-',:numero_documento)");

        $stmt->bindParam(":tipo_documento", $data["tipo_documento"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_documento", $data["numero_documento"], PDO::PARAM_STR);

        if($stmt->execute()){

            return $stmt->fetch(PDO::FETCH_ASSOC);

        }else{

            return $stmt->errorInfo();

        }

        $stmt = null;

    }

    static public function mdlCrearPaciente($data){

        $stmt = Conexion::conectar()->prepare("INSERT INTO pacientes (tipo_documento, numero_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, genero, direccion, ciudad, departamento, telefono, tipo) VALUES (:tipo_documento, :numero_documento, :primer_nombre, :segundo_nombre, :primer_apellido, :segundo_apellido, :fecha_nacimiento, :genero, :direccion, :ciudad, :departamento, :telefono, :tipo)");

        $stmt->bindParam(":tipo_documento", $data["tipo_documento"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_documento", $data["numero_documento"], PDO::PARAM_STR);
        $stmt->bindParam(":primer_nombre", $data["primer_nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":segundo_nombre", $data["segundo_nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":primer_apellido", $data["primer_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":segundo_apellido", $data["segundo_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_nacimiento", $data["fecha_nacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $data["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $data["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $data["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $data["departamento"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $data["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo", $data["tipo"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return $stmt->errorInfo();

        }

        $stmt = null;
        

    }

}