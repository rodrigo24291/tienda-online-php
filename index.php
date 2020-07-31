<?php
session_start();
include_once 'config/parameters.php';
include_once 'controller/pedidoscontroller.php';
include_once 'partes/cabezerabostrap.php';
include_once 'controller/carritocontroller.php';
include_once 'controller/usuariocontroller.php';
include_once 'controller/productocontroller.php';
include_once 'controller/categoriacontroller.php';
include_once 'controller/ErrorController.php';
function show_error(){
	$error = new errorController();
	$error->index();
}

if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	show_error();
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}
