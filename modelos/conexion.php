<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost; dbname=surpartner", "root", "");

		$link->exec("set names utf8");

		return $link;
	}
}

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["b9b43eb54db2c4"];
$cleardb_password = $cleardb_url["b0aeba46"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);