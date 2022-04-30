<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


$aPacientes = array();
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre y Apellido" => "Ana Acuña",
    "Edad" => 45,
     "Peso" => 81.5, 
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
    "Nombre y Apellido" => "Gonzalo Bustamante",
    "Edad" => 66,
     "Peso" => 79, 
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
    "Nombre y Apellido" => "Juan Irraola",
    "Edad" => 28,
     "Peso" => 79, 
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
    "Nombre y Apellido" => "Beatriz Ocampo",
    "Edad" => 50,
     "Peso" => 79, 
);

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
                <h1>Lista de pacientes</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <div>
                            <tr>
                                <th>DNI</th> <!-- td es fila-->
                                <th>Nombre y Apeliido</th>
                                <th>Edad</th>
                                <th>Peso</th>
                            </tr>
                            <?php

                            foreach ($aPacientes as $pos => $aPaciente){ //comienza el bucle
                                //existen diferesntes tipos de bucle
                            
                            ?>
                            <tr>
                                <td><?php echo $aPaciente ["DNI"]; ?></td> <!-- td es columna-->
                                <td><?php echo $aPaciente ["Nombre y Apellido"]; ?></td>
                                <td><?php echo $aPaciente ["Edad"]; ?></td>
                                <td><?php echo $aPaciente ["Peso"] ?></td>
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