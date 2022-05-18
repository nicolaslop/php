<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
//definicion
function print_f($variable)
{
    if(is_array($variable)){
        $contenido="";
        foreach ($variable as $item) {
         $contenido .= $item ."\n";
        //sies un array,lo recorro y guardo el contenido en el archivo "datos.txt"
        } 
        file_put_contents("datos.txt", $contenido);
    }else {
            //entonces es string, guardo el contenido en el archivo "datos.txt"
            file_put_contents("datos.txt", $variable);
    }
    echo "archivo actualizado.";
        
}
//uso
$aNotas = array(8,5,7,9,10);
$msg ="este es un mensaje";
print_f($aNotas);