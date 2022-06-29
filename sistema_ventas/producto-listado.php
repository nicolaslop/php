<?php

include_once "config.php";
include_once "entidades/cliente.php";
include_once "entidades/provincia.php";
include_once "entidades/localidad.php";

$cliente = new Cliente();
$cliente->cargarFormulario($_REQUEST);

$pg = "Listado de clientes";

if ($_POST) {
  if (isset($_POST["btnGuardar"])) {
    if (isset($_GET["id"]) && $_GET["id"] > 0) {
      //Actualizo un cliente existente
      $cliente->actualizar();
    } else {
      //Es nuevo
      $cliente->insertar();
    }
    $msg["texto"] = "Guardado correctamente";
    $msg["codigo"] = "alert-success";
  } else if (isset($_POST["btnBorrar"])) {
    $cliente->eliminar();
    header("Location: cliente-listado.php");
  }
}

if (isset($_GET["do"]) && $_GET["do"] == "buscarLocalidad" && $_GET["id"] && $_GET["id"] > 0) {
  $idProvincia = $_GET["id"];
  $localidad = new Localidad();
  $aLocalidad = $localidad->obtenerPorProvincia($idProvincia);
  echo json_encode($aLocalidad);
  exit;
}
if (isset($_GET["id"]) && $_GET["id"] > 0) {
  $cliente->obtenerPorId();
}


$provincia = new Provincia();
$aProvincias = $provincia->obtenerTodos();

include_once("header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Listado de producto</h1>
  <?php if (isset($msg)) : ?>
    <div class="row">
      <div class="col-12">
        <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
          <?php echo $msg["texto"]; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-12 mb-3">
      <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
    </div>
  </div>
  <div class="row">
    <div class="col-6 form-group">
      <label for="txtNombre">Foto:</label>
      <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $cliente->nombre ?>">
    </div>
    <div class="col-6 form-group">
      <label for="txtCuit">Nombre:</label>
      <input type="text" required class="form-control" name="txtCuit" id="txtCuit" value="<?php echo $cliente->cuit ?>" maxlength="11">
    </div>
    <div class="col-6 form-group">
      <label for="txtCorreo">Cantidad:</label>
      <input type="" class="form-control" name="txtCorreo" id="txtCorreo" required value="<?php echo $cliente->correo ?>">
    </div>
    <div class="col-6 form-group">
      <label for="txtTelefono">Precio:</label>
      <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" value="<?php echo $cliente->telefono ?>">
    </div>
    <div class="col-6 form-group">
      <label for="txtTelefono">Acciones:</label>
      <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" value="<?php echo $cliente->telefono ?>">
    </div>
  </div>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
  $(document).ready(function() {
    var idCliente = '<?php echo isset($cliente) && $cliente->idcliente > 0 ? $cliente->idcliente : 0 ?>';

  });

  function fBuscarLocalidad() {
    idProvincia = $("#lstProvincia option:selected").val();
    $.ajax({
      type: "GET",
      url: "cliente-formulario.php?do=buscarLocalidad",
      data: {
        id: idProvincia
      },
      async: true,
      dataType: "json",
      success: function(respuesta) {
        let resultado = "<option value='0' disabled selected>Seleccionar</option>";
        respuesta.forEach(function(valor, indice) {
          resultado += `<option value="${valor.idlocalidad}">${valor.nombre}</option>`;
        });
        $("#lstLocalidad").empty().append(resultado);
      }
    });
  }
</script>
<?php include_once("footer.php"); ?>