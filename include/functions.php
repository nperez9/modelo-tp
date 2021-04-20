<?php 

function conectar_dataBase()
{
    $conexion = mysqli_connect('mysql.hostinger.com.ar','u181322330_once','oncetex123','u181322330_once');
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

function get_array($a){
    $aux = explode(',',$a);
    $array = array(); 
    foreach($aux as $b){
        if($b != "")
            array_push($array, $b); 
    }
    return $array;      
}