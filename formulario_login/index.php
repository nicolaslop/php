<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
if($_POST){/* si es postback*/
    $USUARIO =$_POST["txtNombre"];
    $CLAVE =$_POST["txtClave"];
}

    //si usuario y clave son distintos de vacio entonce:
    // redireccionar a acceso-confirmado.php
    if($Nombre != "" && $CLAVE != "" ){
    header("location:formato-confirmado.php");
    }
    else{
        $mensaje="valido para usuario registrado";
    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="clas container">
            <div class="class row">
                <div class="col-12 text-center">
                    <h1>Formulario</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <?php if (isset($mensaje)){ 
                    ?>
                <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje?>
                        </div>
                        <?php }  ?>
                    <form method="POST" action="">
                        <div>
                            <label for="txtNombtre">NOMBRE:</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                         </div>
                        <div class="col-12 ">
                            <label for="txtClave">CLAVE :</label>
                            <input type="password" name="txtClave" id="txtClave" class="form-control">
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                        </div>
                    </form>
            </div>
        </div>
    </main>
</body>

</html>