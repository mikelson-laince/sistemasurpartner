<?php

class Conexion{

	public function conectar(){
		//Get Heroku ClearDB connection information
		$cleardb_url = parse_url(getenv("heroku_ed0c3f3800533e3"));
		$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
		$cleardb_username = $cleardb_url["b9b43eb54db2c4"];
		$cleardb_password = $cleardb_url["b0aeba46"];
		$cleardb_db = substr($cleardb_url["path"],1);
		$active_group = 'default';
		$query_builder = TRUE;
		// Connect to DB
		$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
	}
}