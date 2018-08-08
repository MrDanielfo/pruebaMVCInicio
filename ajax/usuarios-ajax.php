<?php

require_once '../controllers/UsuariosController.php';
require_once '../models/UsuariosModel.php';


class UsuariosAjax {

	public $idUsuario;

	public function mostrarUsuarioId() {

		$id = $this->idUsuario;

		$tabla = "usuarios";

		$respuesta = new UsuariosController();
		$respuesta->mostrarUsuarioAjax($tabla, $id);

		return $respuesta;


	}

	

}


if(isset($_POST['idUsuario'])) {

		$mostrarUsuario = new UsuariosAjax();
		$mostrarUsuario->idUsuario = $_POST['idUsuario'];
		$mostrarUsuario->mostrarUsuarioId();


}