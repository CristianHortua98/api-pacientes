<?php

class Conexion{

    /*
    static public function conectar(){ //LOCAL

		$link = new PDO("mysql:host=127.0.0.1:3306;dbname=api",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}*/

    static public function conectar(){ //PRODUCION

		$link = new PDO("mysql:host=api.mysql.database.azure.com:3306;dbname=api",
        "adminapi",
        "Cristian9805*");

        $link->exec("set names utf8");

        return $link;

	}


}