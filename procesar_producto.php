<?php
	require_once 'core/init.php';
	
	$bto = $_POST["btoProducto"];
	if(!empty($bto)and $bto=="Agregar"){
		extract($_POST);
		
		$sql = "INSERT INTO productos VALUE(
			null,?,?,?,?,? 
		)";
		$query = DB::getInstance()->consultar($sql, array($producto,$cantidad,$precio,'imagen1.jpg',$categoria));
		
		if($query->error()){
			//Error producido - no se inserto
			header ("Location: listar_productos.php");
		}else{
			//OK - Se inserto correctamente.
			header ("Location: listar_productos.php");
		}		
			
		
	}elseif(!empty($bto)and $bto=="Actualizar"){
		extract($_POST);
		$sql = "UPDATE productos SET
					producto = ?,
					cantidad = ?,
					precio = ?,
					imagen = ?,
					idcategoria = ?
				WHERE
					id = ?
			";
		$query = DB::getInstance()->consultar($sql, array($producto,$cantidad,$precio,'imagen1.jpg',$categoria,$idproducto));
			if($query->error()){
				//Error producido - no se inserto
				header ("Location: listar_productos.php");
			}else{
				//OK - Se inserto correctamente.
				header ("Location: listar_productos.php");
			}
	}else{
		echo" No se mandaron datos para insertar";
	}
?>