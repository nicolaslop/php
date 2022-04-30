<?php
ini_set( "display_errors", 1);
ini_set( "display_startup_errors",1);
error_reporting (E_ALL);
?>
<?php
//definicion
$aNotas = array (9,8,9.50,4,7,8);
$aProductos = array ("Nombre" => "Smart TV 55\" 4K UHD",
"Marca" => "Hitachi",
"Modelo" => "554KS20",
"Stock" => 60,
"Precio" => 58000,
);
$aProducto[]= array ("Nombre" => "Samsung Galaxi A30 Blanco",
"Marca" => "Samsung",
"Modelo" => "Galaxi A30",
"Stock" => 0,
"Precio" => 22000,
);
$aProducto[]= array ("Nombre" => "Aire Acondicionado Split F/C Surrey 2900F",
"Marca" => "Surrey",
"Modelo" => "553AIQ1201E",
"Stock" => 5,
"Precio" => 45000,
);
$aEmpleados = array();
$aEmpleados = array("dni" => 33300123, "Nombre" => "Davis Garcia", "Bruto" => 85000.30);
$aEmpleados = array("dni" => 40874456, "Nombre" => "Ana del Valle", "Bruto" => 90000);
$aEmpleados = array("dni" => 67567565, "Nombre" => "Andres Perez", "Bruto" => 90000);
$aEmpleados = array("dni" => 75744545, "Nombre" => "Victoria Luz", "Bruto" => 90000);

function contar($aArray){
$cont = 0;
foreach($aArray as $item){
    $cont++;
}
return $cont;
}
$aNotas = array (9,8,9.50,4,7,8);
echo "cantidad de productos" . contar($aProductos)."<br>";
echo "cantidad de pacientes" . contar($aEmpleados)."<br>";
echo "cantidad de notas" . contar($aNotas);
?>