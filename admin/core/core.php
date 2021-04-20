<?php

// se incluye para estar disponible en todas las paginas , controladores y vistas
// Definen constantes y archivos de configuracion
define('HTML_DIR', 'html/');
define('APP_NAME', 'OnceTex');
define('PUBLIC_DIR','./public/');
//Definicion de las constantes para la base de datos
define('HOST', 'mysql.hostinger.com.ar');
define('USER', 'u181322330_once');
define('PASS', 'oncetex123');
define('DATABASE', 'u181322330_once');
/*
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'oncetex_db');*/

// Las constantes siempre en mayusculas

function conectar_dataBase()
{
    $conexion = mysqli_connect(HOST,USER,PASS,DATABASE);
    if(!$conexion){
        fatal_error("Oooops, parece que hubo un problema con nuestra base de datos");
    }
    return $conexion;
}


// te desconecta de la base de datos
function disconnectDB($conexion){
    $close = mysqli_close($conexion);
}


function get_ArraySQL($sql){ // obtiene los datos de la consulta
    $conexion = conectar_dataBase();
    mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
    if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
    $rawdata = array(); //creamos un array
    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;
    while($row = mysqli_fetch_array($result))
    {
        $rawdata[$i] = $row;
        $i++;
    }
    disconnectDB($conexion); //desconectamos la base de datos
    return $rawdata; //devolvemos el array
}

function guardarImagen($files){
    if ($files["error"] >

     0){
        echo "ha ocurrido un error";
        var_dump($files);
    }
    else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 2048;
        if (in_array($files['type'], $permitidos) && $files['size'] <= $limite_kb * 1024){
            $ruta = "../img/productos/" . $files['name'];
            if (!file_exists($ruta)){
                $resultado = @move_uploaded_file($files["tmp_name"], $ruta);
                if ($resultado){
                    $db_route = "img/productos/".$files['name'];
                    $nombre = $files['name'];
                    echo "el archivo ha sido movido exitosamente";
                    return $db_route;
                } else {
                    echo "ocurrio un error al mover el archivo.";
                }
            } else {
                echo $files['name'] . ", este archivo existe";
            }
        } else {
            echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
        }
    }
    exit();
    return false;
}

function go_to_list($mensaje = ""){
    if($mensaje != "")
        echo "<script>alert('$mensaje'); </script>";
    header("Location: ./index.php?view=list");
}


/**
 * truncate a string provided by the maximum limit without breaking a word
 * @param string $str
 * @param integer $maxlen
 * @return string
 */
function string_limit($str, $maxlen)
{
    if (strlen($str) <= $maxlen) return $str;

    $newstr = substr($str, 0, $maxlen);
    if (substr($newstr, -1, 1) != ' ') $newstr = substr($newstr, 0, strrpos($newstr, " "))."...";

    return $newstr;
}
