<?php
	require_once 'core/init.php';
	
	$bto = $_POST["btoUsuario"];
	if(!empty($bto)and $bto=="Agregar"){
		extract($_POST);
		
		$sql = "INSERT INTO usuarios VALUE(
			null,?,?,?,?
		)";
		$query = DB::getInstance()->consultar($sql, array($usuario,$clave,$privilegio,$token));
		
		if($query->error()){
			//Error producido - no se inserto
			header ("Location: listar_usuarios.php");
		}else{
			//OK - Se inserto correctamente.
			header ("Location: listar_usuarios.php");
		}		
			
		
	}elseif(!empty($bto)and $bto=="Actualizar"){
		extract($_POST);
		$sql = "UPDATE usuarios SET
					usuario = ?,
					clave = ?,
					privilegio = ?,
					token = ?
				WHERE
					id = ?
			";
		$query = DB::getInstance()->consultar($sql, array($usuario,$clave,$privilegio,$token,$idusuario));
			if($query->error()){
				//Error producido - no se inserto
				header ("Location: listar_usuarios.php");
			}else{
				//OK - Se inserto correctamente.
				header ("Location: listar_usuarios.php");
			}
	}else{
		echo" No se mandaron datos para insertar";
	}
?>