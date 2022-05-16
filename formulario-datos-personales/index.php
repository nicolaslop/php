
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
                <h1>DATOS PERSONALES</h1>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-3 col-sm-6 col-12">
                <form method="POST"  action="resultado.php">
                <div>
                        <div class="pb-3">
                            <label for="">Nombre:*</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control"require>
                         </div>
                        <div class="pb-3">
                            <label for="">Dni:*</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control"require>
                        </div>
                        <div class="pb-3">
                        <label for="">Telefono:*</label>
                            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control"require>
                         </div>
                        <div class="pb-3">
                            <label for="">Edad:*</label>
                            <input type="text" name="txtEdad" id="txtEdad" class="form-control"require>
                        </div>
                        <div class="pb-3">
                            <button type="submit" class="btn btn-primary float-end">ENVIAR</button>
                        </div>


                </form>
            </div>
        </div>

    </main>
</body>
</html>


} else if(isset($_POST["btaEliminar"])){
        session_destroy();
        header("location:cliente_seccion.php");
    }


    if ($_POST){
    if(isset($_POST["btnAgregar"])){