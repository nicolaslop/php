<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if ($_POST)
    $Nombre = $_REQUEST["txtNombre"];
$Dni = $_REQUEST["txtDni"];
$Telefono = $_REQUEST["txtTelefono"];
$Edad = $_REQUEST["txtEdad"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="col-12">
            <div class="row">
                <h1 class="text-center py-5">Resultado de formulario</h1>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dni</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $Nombre; ?></td>
                    <td><?php echo $Dni; ?></td>
                    <td><?php echo $Telefono; ?></td>
                    <td><?php echo $Edad; ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>