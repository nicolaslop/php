<?php
ini_set( "display_errors", 1);
ini_set( "display_startup_errors",1);
error_reporting (E_ALL);


$aProducto = array();
$aProducto[]= array ("Nombre" => "Smart TV 55\" 4K UHD",
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
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Lista de precios</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        
                            <thead>
                             <tr>
                                <th>Nombre</th>      <!-- td es fila-->
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Accion</th>
                            </tr>   
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $aProducto[0]["Nombre"];?></td> <!-- td es columna-->
                                    <td><?php echo $aProducto[0]["Marca"];?></td>
                                    <td><?php echo $aProducto[0]["Modelo"];?></td>
                                    <td><?php echo $aProducto[0]["Stock"] == 0? "No hay Stock" :($aProducto[0]["Stock"]>10?"Hay Stock":"Poco Stock");?></td>
                                    <td><?php echo $aProducto[0]["Precio"];?></td>
                                    <td><button class="btn btn-primary">Comprar</button></td>
                                </tr>
                                <tr>
                                    <td><?php echo $aProducto[1]["Nombre"];?></td> 
                                    <td><?php echo $aProducto[1]["Marca"];?></td>
                                    <td><?php echo $aProducto[1]["Modelo"];?></td>
                                    <td><?php echo $aProducto[1]["Stock"] == 0? "No hay Stock" :($aProducto[1]["Stock"]>10?"Hay Stock":"Poco Stock");?></td>
                                    <td><?php echo $aProducto[1]["Precio"];?></td>
                                    <td><button class="btn btn-primary">Comprar</button></td>
                                </tr>
                                <tr>
                                    <td><?php echo $aProducto[2]["Nombre"];?></td> 
                                    <td><?php echo $aProducto[2]["Marca"];?></td>
                                    <td><?php echo $aProducto[2]["Modelo"];?></td>
                                    <td><?php echo $aProducto[2]["Stock"] == 0? "No hay Stock" :($aProducto[2]["Stock"]>10?"Hay Stock":"Poco Stock");?></td>
                                    <td><?php echo $aProducto[2]["Precio"];?></td>
                                    <td><button class="btn btn-primary">Comprar</button></td>
                                </tr>
                            </tbody>
                       
                       
                    </table>
                </div>
            </div>
        </div>

    </main>


</body>

</html>