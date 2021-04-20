<?php
session_start();
include './core/core.php';
//si se divide puede mostrar un controllador de error de 404
if(isset($_SESSION['once_log']) && $_SESSION['once_log'] === 14578957896337481367421626)
{
	if(isset($_GET['view']) && file_exists("./core/controllers/".$_GET['view']."Controller.php")){
		include "./core/controllers/".$_GET['view']."Controller.php";
	}
	else{
		include "./core/controllers/listController.php";
	}
}
else{
	//retorna a index
	include  "./core/controllers/loginController.php";
}
