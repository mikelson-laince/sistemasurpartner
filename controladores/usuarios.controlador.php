<?php

class ControladorUsuarios{

	/* Ingreso de usuarios */

	public function ctrIngresoUsuario(){

		if (isset($_POST["ingUsuario"])) {
			/* control de caracter para el nombre de usuario */

			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])) {

				$tabla = "usuario";

				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){

					$_SESSION["iniciarSession"] = "ok";

					echo '<script>
						window.location = "principal";
					</script>';
					
				}else{
					echo'<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
				}
			}
		}
	}
}