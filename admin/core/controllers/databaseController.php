<?php
// si se divide puede mostrar un controllador de error de 404
if(isset($_GET['accion'])){
	if(file_exists("./core/models/".$_GET['accion'].".php")){
		include "./core/models/".$_GET['accion'].".php";
	}
}


else{
	// retorna a index
	header("Location: ./index.php?view=list");
	exit();
}
