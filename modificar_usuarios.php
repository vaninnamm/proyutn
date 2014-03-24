<?php
	require_once 'core/init.php';

	$id=$_GET["id"];
	$sql="
		SELECT * FROM usuarios
		WHERE id= ?
		";
	$users= DB::getInstance()->consultar($sql,array($id))->results();
	?>

<form action="procesar_usuario.php" method="post">
	<input type ="hidden" name=idusuario value ="<?php echo $users[0]->id?>">
	Usuario: <br>
	<textarea name="usuario" id="usuario" cols="30" rows="10"><?php echo $users [0]->usuario ?></textarea>
	<br>
	Clave:<br>
	<input type="text" name= "clave" value =<?php echo $users[0]->clave; ?> />
	<br>
	Privilegio:<br>
	<input type="text" name= "privilegio" value =<?php echo $users[0]->privilegio; ?> />
	<br>
	Token:<br>
	<input type="text" name= "token" value =<?php echo $users[0]->token; ?> />
	<br>
	<input type="submit" name="btoUsuario" value="Actualizar">
</form>