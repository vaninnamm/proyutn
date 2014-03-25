<?php
	require_once 'core/init.php';
	
	if(!Session::exists("LoginTrue") OR !Session::get("LoginTrue") ){
		Session::logout();
		header("Location:login.php");
	}
	if(Session::exists("ok")){
		echo Session::flash("ok");
	}
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF  -8">
	<title>Pantalla de Inicio</title>
</head>
<body>
	<h1>Sistema Proyecto UTN</h1>
	<h2>ABM de Productos</h2>
	<a href="listar_productos.php">Listar Productos</a>
	<br>
	<a href="agregar_productos.php">Agregar Productos</a>
	<br>
	<a href="listar_usuarios.php">Listar Usuarios</a>
	<br>
	<a href="agregar_usuarios.php">Agregar Usuarios</a>
	<br>
	<a href="salir.php">SALIR</a>
</body>
</html>

