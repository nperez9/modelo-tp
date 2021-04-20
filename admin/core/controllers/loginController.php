<?php

if(isset($_POST['usuario']) && isset($_POST['acceso']))
{
	$usuario = trim($_POST['usuario']);
	$password = trim($_POST['acceso']);
	$query =  "SELECT * FROM usuarios
			  WHERE usuario = '$usuario' AND password ='$password'";
	$res = get_ArraySQL($query);  
	if(count($res) != 0){
		$_SESSION['once_log'] = 14578957896337481367421626; 
		header('Location: index.php?view=list');
	}
	else{
		//Con esto deveria bastar
		echo '<script> alert("Usuario o Clave invalidos");
		  </script>';
		include (HTML_DIR.'login/login.php');		
	}
}	
else{
	include (HTML_DIR.'login/login.php');
}
