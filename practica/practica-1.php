<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
//definicion

//Usamos foreach y file_put_conts
function print_f3($variable){ //Recomendable usar esta funcion
    if(is_array($variable)){
        //Si es un array, lo recorre y guardo el contenido en archivo "datos.txt"   
    } else{
        //Entonces es string, guardo el contenido en el archivo "datos.txt"
        file_put_contents("archivo.txt", $variable);
    }
    echo"Actualizado";
}
    //uso
$aNotas = array(8,5,7,9,10);
$msg ="este es un mensaje";
print_f3($aNotas);
?>