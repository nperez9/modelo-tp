<?php 

$id = $_POST['id'];
$sql = "DELETE FROM productos WHERE productos.id = '$id'";
// borra de la base de datos
$conexion = conectar_dataBase();
$resultado = mysqli_query($conexion, $sql); 
disconnectDB($conexion);
if($resultado != false)
{
	header("Location: ./index.php?view=list&success=eliminado");
}
else{
	var_dump($resultado); 
	die('error'); 
}
