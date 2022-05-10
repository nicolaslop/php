<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
?>
<?php
$aAlumnos = array();
$aAlumnos[] = array("nombre" => "juan perez","notas"=> array(9, 8));
$aAlumnos[] = array("nombre" => "ana valle", "notas"=> array(4, 9));
$aAlumnos[] = array("nombre" => "gonzalo roldan","notas"=>  array(7, 6));
function promediar($aNumeros){
    $Suma = 0;
foreach ($aNumeros as $Numero){
    $Suma = $Suma + $Numero;
}
$promedio =  $Suma / count( $aNumeros);
return $promedio;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <div>
                    <h1>ACTAS</h1>
                </div>
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>alumno</th>
                            <th>nota 1</th>
                            <th>nota 2</th>
                            <th>promedio</th>
                        </tr>
                        <?php
                        $Promediocursada = 0;
                        $sumatoria =  0;
                        foreach ($aAlumnos as $alumno) {
                            $Promedio = Promediar($alumno["notas"]);
                            $sumatoria = $sumatoria + $Promedio;
                            ?>
                        <tr>
                            <td><?php echo$alumno["nombre"];?></td>
                            <td><?php echo$alumno["notas"][0];?></td>
                            <td><?php echo$alumno["notas"][1];?></td>
                            <td><?php echo number_format($Promedio,2,",",".");?></td>
                        </tr>
                        <?php
                         }
                         $PromedioCursada = $sumatoria /count($aAlumnos );
                        ?>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>promedio de la cursada :<?php echo number_format ($PromedioCursada , 2,",",".");?> </p>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>