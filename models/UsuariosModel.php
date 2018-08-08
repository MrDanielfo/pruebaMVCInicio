<?php

require_once 'ConnModel.php';

class UsuariosModel {

	static public function inicioSesion($tabla, $item, $n_usuario) {

		$stmt = ConexionModel::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":$item", $n_usuario, PDO::PARAM_STR);

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

		$stmt = null;

	}


	static public function mostrarUsuarios($tabla) {

		$stmt = ConexionModel::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

		$stmt = null;


	}

	static public function registroUsuario($tabla, $datosController) {

		$stmt = ConexionModel::conectar()->prepare("INSERT INTO $tabla (nombre, email, n_usuario, pass) VALUES (:nombre, :email, :n_usuario, :pass)");
		$stmt->bindParam(":nombre", $datosController['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosController['email'], PDO::PARAM_STR);
		$stmt->bindParam(":n_usuario", $datosController['n_usuario'], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datosController['pass'], PDO::PARAM_STR);

		if($stmt->execute()){
			return 'ok';
		} else {
			return 'error';
		}

		$stmt->close();

		$stmt = null;


	} // fin del método

	static public function mostrarUsuarioAjax($tabla, $id) {

		$stmt = ConexionModel::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $id, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetch();


		$stmt->close();

		$stmt = null;


	}

	static public function editarUsuario($tabla, $datosController) {

		$stmt = ConexionModel::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, n_usuario = :n_usuario, pass = :pass WHERE id = :id");
		$stmt->bindParam(":nombre", $datosController['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosController['email'], PDO::PARAM_STR);
		$stmt->bindParam(":n_usuario", $datosController['n_usuario'], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datosController['pass'], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosController['id'], PDO::PARAM_STR);

		if($stmt->execute()){
			return 'ok';
		} else {
			return 'error';
		}

		$stmt->close();

		$stmt = null;


	} // fin del método

	static public function eliminarUsuario($tabla, $id) {

		$stmt = ConexionModel::conectar()->prepare("DELETE FROM $tabla WHERE id = $id");

		if($stmt->execute()){
			return 'ok';
		} else {
			return 'error';
		}

		$stmt->close();

		$stmt = null;

	}

	
}