<?php

class Conexion{


    static public function conectar(){//Local


        //LOCAL
        $link = new PDO("mysql:host=api.mysql.database.azure.com:3306;dbname=api",
        "adminapi",
        "Cristian9805*");

        $link->exec("set names utf8");

        return $link;
		

    }

    /*
    static public function conectar(){ //Pruebas

		$link = new PDO("mysql:host=127.0.0.1:3306;dbname=helpdesk",
			            "root",
			            "Ingens2021*");

		$link->exec("set names utf8");

		return $link;

	}
    */


}