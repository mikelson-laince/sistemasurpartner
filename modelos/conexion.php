<?php

class Conexion{

	public function conectar(){

		$link = new mysqli("mysql:host=us-cdbr-east-05.cleardb.net; dbname=heroku_ed0c3f3800533e3", "b9b43eb54db2c4", "b0aeba46");

		//$link->exec("set names utf8");

		return $link;
	}
}