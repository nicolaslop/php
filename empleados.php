
<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
?>
<?php
$aEmpleados = array();
$aEmpleados [] = array("dni" => 33300123, "nombre" => "david garcia", "bruto" => 85000.30);
$aEmpleados []= array("dni" => 40874456, "nombre" => "ana del valle", "bruto" => 90000);
$aEmpleados []= array("dni" => 67567565, "nombre" => "andres perez", "bruto" => 1000000);
$aEmpleados []= array("dni" => 75744545, "nombre" => "victoria luz", "bruto" => 70000);

function calcularNeto($bruto)
{
    return $bruto - $bruto * 0.17;
}
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
                                <th>Nombre</th>
                                <th>Sueldo</th>
                            </tr>
                            <?php
                             foreach ($aEmpleados as $empleado)
                             {   
                            ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td> <!-- td es columna-->
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td> <!-- mb_strtoupper= sirve para mayuscula-->
                                <td><?php $importe=CalcularNeto($empleado["bruto"]);
                                echo number_format($importe,2,",",".");?></td>
                            </tr>
                            <?php
                            }
                            ?>    

                        </div>
                    </table>   
                </div>
                <div class="col-12">
                    <p>cantidad de empleados activos: <?php  echo count($aEmpleados);?></p>
                </div>
            </div>

        </div>

    </main>

</body>

</html>