<?php
ini_set( "display_errors", 1);
ini_set( "display_startup_errors",1);
error_reporting (E_ALL);
?>

<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
?>
