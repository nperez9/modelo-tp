<?php

include(HTML_DIR."include/head.php");

$titulo = $_POST['titulo'];
$precio = $_POST['precio']; 
$descripcion = $_POST['descripcion'];
$imagen = guardarImagen($_FILES['imagen']);
$tela = $_POST['tela'];
$talles = $_POST['talles']; 
$colores = $_POST['colores']; 
$destacada = (int)$_POST['destacado']; 

var_dump($_POST);
$sql = "INSERT INTO productos(
							titulo,
							precio, 
							descripcion,
							imagen,
							tela, 
							talles, 
							colores,
							destacado)
				VALUES(
						'$titulo',
						'$precio', 
						'$descripcion',
						'$imagen', 
						'$tela', 
						'$talles', 
						'$colores', 
						'$destacada')";
						
$conexion = conectar_dataBase();
mysqli_set_charset($conexion, "utf8");
echo "logrado"; 
$resultado = mysqli_query($conexion, $sql);

if($resultado != false )
{
	unset($_POST);
	header("Location: ./index.php?view=list&success=creado");
	disconnectDB($conexion);
}
else{
	var_dump($resultado);
	var_dump(mysqli_error($conexion)); 
	$error = 'no se pudo guardar en la base de datos';
	disconnectDB($conexion);
	exit();
}
exit();
