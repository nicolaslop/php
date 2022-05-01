
<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados = array("dni" => 33300123, "Nombre" => "DAVID GARCIA", "Bruto" => 85000.30);
$aEmpleados = array("dni" => 40874456, "Nombre" => "ANA DEL VALLE", "Bruto" => 90000);
$aEmpleados = array("dni" => 67567565, "Nombre" => "ANDRES PEREZ", "Bruto" => 90000);
$aEmpleados = array("dni" => 75744545, "Nombre" => "VICTORIA LUZ", "Bruto" => 90000);
function calcularNeto($bruto)
[
    return $bruto - $bruto * 0.17;
]
/*
$aPacientes = array();
$aPacientes[] = array(
    "DNI" => "33300123",
    "Nombre y Apellido" => "DAVID GARCIA",
     "Sueldo" => "70.550.25",
);
$aPacientes[] = array(
    "DNI" => "40874456",
    "Nombre y Apellido" => "ANA DEL VALLE",
    "Sueldo" => "74.700.00",
);
$aPacientes[] = array(
    "DNI" => "67567565",
    "Nombre y Apellido" => "ANDRES PEREZ",
    "Sueldo" => "83.000.00", 
);
$aPacientes[] = array(
    "DNI" => "75744545",
    "Nombre y Apellido" => "VICTORIA LUZ",
    "Sueldo" => "58.100.00",
);*/

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de empleados</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <div>
                            <tr>
                                <th>DNI</th> <!-- td es fila-->
                                <th>Nombre y Apeliido</th>
                                <th>Sueldo</th>
                            </tr>
                            <?php forreach ($aEmpleados as $empleado); {
                                ?>
                            }
                            
                            <tr>
                                <td><?php echo $aEmpleados[$i]["DNI"]; ?></td> <!-- td es columna-->
                                <td><?php echo mb_strtoupper($aEmpleados[$i]["Nombre"]); ?></td>
                                <td><?php 
                                $importe = calcularNeto($empleado["bruto"]);
                                echo number_format($importe,2,",","."); ?></td>
                            </tr>
                            <?php
                            
                            }?>    

                        </div>
                    </table>   
                </div>
            </div>

        </div>

    </main>

</body>

</html>