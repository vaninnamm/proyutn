<?php
	require_once 'core/init.php';
	
	$users= DB::getInstance()->get("usuarios")->results();
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF  -8">
	<title>Pantalla de Inicio</title>
</head>
<body>
	<a href="index.php">Inicio</a>
	<br>
	<a href="agregar_usuarios.php">Agregar Usuarios</a>
	<br><br>
	<form action="buscar.php" method= "get">
		Buscar <input type = "search" name="q" id="q">
		<input type="submit" name = "btoBuscar" value="Buscar">
	</form>
	<table border = 2 class="mitabla">
		<tr>
			<th>Identificador</th>
			<th>Usuario</th>
			<th>Clave</th>
			<th>Privilegio</th>
			<th>token</th>			
		</tr>
		<?php foreach($users as $row){ ?>
		<tr>
			<td> <?php echo $row-> id ?> </td>
			<td> <?php echo $row-> usuario ?> </td>
			<td> <?php echo $row-> clave ?> </td>
			<td> <?php echo $row-> privilegio ?> </td>
			<td> <?php echo $row-> token ?> </td>
			<td> <a href="<?php echo URL_BASE ?>modificar_usuarios.php?id=<?php echo $row->id ?>"> Modificar </a> </td>
			<td> <a href="<?php echo URL_BASE ?>eliminar_usuarios.php?id=<?php echo $row->id ?>"> Eliminar </a> </td>
			
		</tr>
		<?php } ?>
	</table> 
</body>
</html>
