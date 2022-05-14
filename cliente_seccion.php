<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if ($_POST){
    $Nombre = $_POST["txtNombre"];
    $Dni = $_POST["txtDni"];
    $Telefono = $_POST["txtTelefono"];
    $Edad = $_POST["txtEdad"];
    
    $cliente =array("nombre" => $Nombre,
                    "dni" => $Dni,
                    "telefono"=> $Telefono,
                    "edad" => $Edad);

    $_SESSION["listadoClientes"] [] =$cliente;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario datos personales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>TABLE DE CLIENTE</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-3 0ffset-1 me-5">
                <form method="POST" action="">
                   
                        
                            <label for="">Nombre:*</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control my-2" require>

                            <label for="">Dni:*</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control my-2" require>
                        
                        
                            <label for="">Telefono:*</label>
                            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2" require>
                        
    
                            <label for="">Edad:*</label>
                            <input type="text" name="txtEdad" id="txtEdad" class="form-control my-2" require>
                        
                            <button type="submit" name="btaAgregar" class="btn btn-primary text-white mx-2">ENVIAR</button>
                            <button type="submit" name="btaEliminar" class="btn btn-danger text-white mx-2">ENVIAR</button>
                        
                </form>
            </div>
            <div class="col-6 sm-5 py-4">
                <table class="table table-bordered shadow-border">
                    <thead>
                        <tr> 
                             <th>Nombre</th>
                            <th>Dni</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $_SESSION="0";
                        foreach($_SESSION["listadoClientes"] as $cliente)
                        {
                        ?>
                        <tr>
                            <td><?php echo $cliente["nombre"];?></td>
                            <td><?php echo $cliente["dni"];?></td>
                            <td><?php echo $cliente["telefono"];?></td>
                            <td><?php echo $cliente["edad"];?></td>
                        </tr>
                        <?php 
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>