<?php
ini_set( "display_errors", 1);
ini_set( "display_startup_errors",1);
error_reporting (E_ALL);
?>
<?php
function promediar($aNumeros){
    $Suma = 0;
foreach ($aNumeros as $Numero){
    $Suma += $Numero;
}
$promedio =  $Suma / count( $aNumeros);
return $promedio;
}

//USO
$aNotas=array(8,4,5,3,9,1);
echo "la nota promedio es: " . promediar($aNotas);
?>