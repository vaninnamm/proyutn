<?php
	require_once 'core/init.php';

?>

<form action="procesar_usuario.php" method="post">
	Usuario: <br>
	<textarea name="usuario" id="usuario" cols="20" rows="10"></textarea>
	<br>
	Clave:<br>
	<input type="text" name= "clave" />
	<br>
	Privilegio:<br>
	<input type="text" name= "privilegio" />
	<br>
	Token:<br>
	<input type="text" name= "token" />
	<br>
	<input type="submit" name="btoUsuario" value="Agregar">
</form>