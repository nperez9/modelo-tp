<?php
// Validar log in (index )
$conexion = conectar_dataBase();
$sql = 'SELECT id,titulo,descripcion FROM productos';

$items = get_arraySQL($sql);

include (HTML_DIR.'admin/lista.php');
