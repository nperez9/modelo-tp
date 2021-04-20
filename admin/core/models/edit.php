<?php
// Edicion 
include(HTML_DIR."include/head.php") ;
$id = $_POST['id']; 
$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$tela = $_POST['tela'];
$talles = $_POST['talles'];
$colores = $_POST['colores'];
$destacado = (int)$_POST['destacado'];


if($_FILES['imagen']['name'] != "")
{
	$imagen = guardarImagen($_FILES['imagen']);
	$sql = "UPDATE  productos 
							SET 
							titulo = '$titulo',
							precio = '$precio', 
							descripcion = '$descripcion',  
							imagen = '$imagen',
							tela = '$tela', 
							talles = '$talles', 
							colores = '$colores',
							destacado = $destacado 
						WHERE id = '$id'";	
}
else{
	$sql =	"UPDATE  productos SET 
							titulo = '$titulo',
							precio = '$precio', 
							descripcion = '$descripcion',  
							tela = '$tela',
							talles = '$talles', 
							colores = '$colores',
							destacado = $destacado 
						WHERE id = '$id'";	
}


$conexion = conectar_dataBase();
mysqli_set_charset($conexion, "utf8");
$resultado = mysqli_query($conexion, $sql);
disconnectDB($conexion);
if($resultado != false )
{
	unset($_POST); 
	header("Location: ./index.php?view=list&success=editado");
}
else{
	$error = 'no se pudo guardar en la base de datos';
	header("Location: ./index.php?view=error&error=$error");
}
exit();