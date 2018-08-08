<?php


// Incluir Controladores 
require_once 'controllers/PlantillaController.php';
require_once 'controllers/UsuariosController.php';

// Incluir Modelos
require_once 'models/UsuariosModel.php';

$plantilla = new PlantillaController();
$plantilla->plantilla();