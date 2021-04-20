<?php
// Listo
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = "SELECT * FROM productos WHERE id=$id";
	$res = get_ArraySQL($query);
	$producto = $res[0];
	include(HTML_DIR.'admin/editar.php');
}
else
{
	go_to_list('producto invalido'); 
}