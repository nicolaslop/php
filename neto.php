<?php
ini_set( "display_errors", 1);
ini_set( "display_startup_errors",1);
error_reporting (E_ALL);
?>
<?php
function calcularNeto($bruto,$cargas){
    return $bruto - ($bruto* 0.17);
}

echo"El sueldo neto es $" . calcularNeto(50000,0.17);

?>
