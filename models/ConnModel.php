<?php

class ConexionModel {

	static public function conectar(){

		$link = new PDO('mysql:host=localhost;dbname=josuemvc_prueba', 'root', 'root');
		$link->exec("set names utf8");

		return $link;
	}



}