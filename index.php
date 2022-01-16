<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/vendedores.controlador.php";
require_once "controladores/clientes.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/vendedores.modelo.php";
require_once "modelos/clientes.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);