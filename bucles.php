<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

?>
<?php
$aCoches=array();
$aCoches[]=array(
    "MARCA"=>"ford",
    "COLOR"=>"rojo",
    "PRECIO"=>20.000,

);
$aCoches[]=array(
    "MARCA"=>"renault",
    "COLOR"=>"negro",
    "PRECIO"=>30.000,

);
$aCoches[]=array(
    "MARCA"=>"chevrolet",
    "COLOR"=>"azul",
    "PRECIO"=>10.000,

);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplos</title>
</head>
<body>
    <div class="clas container">
        <div class="class row">
            <div class="class col-12">
                <table>
                    <div>
                            <tr>
                                <th>MARCA</th> <!-- td es fila-->
                                <th>COLOR</th>
                                <th>PRECIO</th>
                            </tr>
                    </div>
                    <?php
                        foreach ($aCoches as $_POS => $aCoche){
                    ?>
                            <tr>
                            <td><?php echo$aCoches["MARCA"];?></td> <!-- td es columna-->
                                <td><?php echo$aCoches["COLOR"];?></td>
                                <td><?php echo$aCoches["PRECIO"];?></td>
                            </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
