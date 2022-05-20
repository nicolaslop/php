<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
if(file_exists("archivo.txt")){
    //si el archivo existe, cargo los dato en la variable $aClientes
    $strjson = file_get_contents("archivo.txt");
    $aClientes = json_decode($strjson , true);
} else{
    //si el archivo no existe es porque no hay cliente
    $aClientes = array();
}

if($_POST){// si es postback almacenamos datos
    $dni =$_POST["txtDni"];
    $nombre =$_POST["txtNombre"];
    $telefono =$_POST["txtTelefono"];
    $correo =$_POST["txtCorreo"];

    //creamos un array
$aClientes=array();
$aClientes[]=array(
                    "dni"=>$dni,
                    "nombre"=>$nombre,
                    "telefono"=>$telefono,
                    "correo"=>$correo,
                );
//convertimos el array de clientes en json
//almacenamos en un archivo.txt el json.

  $strjson = json_encode($aClientes);

file_put_contents("archivo.txt", $strjson);
 }
 echo "actualizado";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM CLIENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>REGISTRO DE CLIENTES</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-3 0ffset-1 me-5">
                <form method="POST" action="">
                   
                        
                        <label for="">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control my-2">

                        <label for="">Dni:*</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control my-2" require>
                         
                        <label for="">Telefono:*</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control my-2"require>
    
                        <label for="">correo:*</label>
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control my-2"require>

                        <label for="">archivo adjunto</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg,.jpeg,.png">
                        <p>archivos admitidos: "jpg.jpeg.png"</p>
                        
                        
                        <button type="submit" name="btnAgregar" class="btn bg-primary text-white mx-2">GUARDAR</button>
                        <button type="reset" name="btnEliminar" class="btn bg-danger text-white mx-2">ELIMINAR</button>
                </form>
            </div>
            <div class="col-6 sm-5 py-4">
                <table class="table table-bordered shadow-border">
                    <thead>
                        <tr> 
                             <th>IMAGEN</th>
                             <th>DNI</th>
                             <th>NOMBRE</th>
                             <th>CORREO</th>
                             <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>