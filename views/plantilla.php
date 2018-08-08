<!-- ver por qué se coloca el inicio de sesión -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Prueba con MVC julio 2018</title>
	<!-- se mandan a traer desde la carpeta assets gracias a que se llama el método que incluye la vista en el index.php-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	
	<?php

	if(isset($_SESSION['validar']) && $_SESSION['validar'] == 'ok') {

		include 'modules/header.php';

		/* en esta parte se hará la validación de las rutas, y las que se incluirán */ 

		if(isset($_GET['ruta'])) {

		$ruta = $_GET['ruta'];

		if( $ruta == "inicio" || 
			$ruta == "usuarios" ||
			$ruta == "eliminar-usuario" ||
			$ruta == "registro" ||
			$ruta == "logout" ) {

			//include 'modules/'.$ruta.'.php';
			include 'modules/'.$ruta.'.php';

		} else {
			include 'modules/404.php';
		}


		} else {
			$ruta = "index";
		}

		/* -- fin de validación de rutas */ 

		include 'modules/footer.php';


	} else {

		include 'modules/login.php';

	}

	

	?>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/usuarios.js"></script>
</body>
</html>