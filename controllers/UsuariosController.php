<?php

class UsuariosController {

	public function inicioSesion() {

		if(isset($_POST['nombreUsuario'])) {

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['nombreUsuario']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['passUsuario'])) {

				$tabla = "usuarios";
				$item = "n_usuario";
				$n_usuario = $_POST['nombreUsuario'];

				$encriptado = crypt($_POST['passUsuario'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$respuesta = UsuariosModel::inicioSesion($tabla, $item, $n_usuario);

				if($respuesta['n_usuario'] == $n_usuario && $respuesta['pass'] == $encriptado) {

					$_SESSION['validar'] = 'ok';
					$_SESSION['id'] = $respuesta['id'];
					$_SESSION['nombre'] = $respuesta['nombre'];
					$_SESSION['email'] = $respuesta['email'];
					$_SESSION['n_usuario'] = $respuesta['n_usuario'];

					echo '<script>
							window.location = "inicio";
						  </script>';

				} else {

					echo '<div class="alert alert-danger my-3" role="alert">
  							Hubo un error al introducir tus datos, verifica que estén bien escritos
						  </div>';
				}

			}

		}

		
	} // fin del método 


	static public function mostrarUsuarios(){

		$tabla = "usuarios";

		$respuesta = UsuariosModel::mostrarUsuarios($tabla);

		return $respuesta;

	}


	public function registroUsuario() {

		if(isset($_POST['nombreRegistro'])) {

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nombreRegistro']) && 
			   preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/', $_POST['emailRegistro']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['nUsuarioRegistro']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['passRegistro']) ) {

			   	$encriptado = crypt($_POST['passRegistro'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			   	$tabla = "usuarios";

			   	$datosController = array(
			   		"nombre" => $_POST['nombreRegistro'],
			   		"email"  => $_POST['emailRegistro'],
			   		"n_usuario" => $_POST['nUsuarioRegistro'],
			   		"pass"		=> $encriptado
			   	);

			   	$respuesta = UsuariosModel::registroUsuario($tabla, $datosController);

			   	if($respuesta == 'ok') {

			   		echo '<div class="alert alert-success my-3" role="alert">
  							El usuario '. $_POST['nombreRegistro'] .' fue registrado con éxito
						  </div>
						  <script>
							window.location = "usuarios";
						  </script>';


			   	}

			} else {

				echo '<div class="alert alert-warning my-3" role="alert">
  						El registro del usuario '. $_POST['nombreRegistro'] .' no se pudo completar pues los campos contienen caracteres especiales y no deben contenerlos
					</div>';

			}


		}

	} // fin del método 

	public function mostrarUsuarioAjax($tabla, $id) {

			$respuesta = UsuariosModel::mostrarUsuarioAjax($tabla, $id);
			echo json_encode($respuesta);
	
	}

	public function editarUsuario() {

		if(isset($_POST['editarNombre'])) {

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['editarNombre']) && 
			   preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/', $_POST['editarEmail']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['editarNomUsuario']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['editarPass']) ) {

			   	$encriptado = crypt($_POST['editarPass'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			   	$tabla = "usuarios";

			   	$datosController = array(
			   		"id"     => $_POST['idUsuario'],
			   		"nombre" => $_POST['editarNombre'],
			   		"email"  => $_POST['editarEmail'],
			   		"n_usuario" => $_POST['editarNomUsuario'],
			   		"pass"		=> $encriptado
			   	);

			   	$respuesta = UsuariosModel::editarUsuario($tabla, $datosController);

			   	if($respuesta == 'ok') {

			   		echo '<script>
							window.location = "usuarios";
						  </script>';


			   	}

			} else {

				echo '<div class="alert alert-warning my-3" role="alert">
  						La edición del usuario '. $_POST['editarNombre'] .' no se pudo completar pues los campos contienen caracteres especiales y no deben contenerlos
					</div>';

			}


		}

	} // fin del método


	public function eliminarUsuario() {

		if(isset($_GET['idUsuario'])) {

			$tabla = "usuarios";
			$id = $_GET['idUsuario'];

			$respuesta = UsuariosModel::eliminarUsuario($tabla, $id);

			return $respuesta;

		}


	}

}