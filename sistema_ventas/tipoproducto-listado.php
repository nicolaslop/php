<?php

include_once "config.php";
include_once "entidades/tipoproducto.php";
$pg = "Listado de tipos de productos";

$TipoProducto = new TipoProducto();
$aTipoProductos = $tipoProducto->obtenerTodos();
print_r($aTipoProductos);
exit;
include_once("header.php"); 
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Listado de clientes</h1>
          <div class="row">
                <div class="col-12 mb-3">
                    <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                </div>
            </div>
          <table class="table table-hover border">
            <tr>
                <th>Nombre</th>
                <th>acciones</th>
            </tr>
            <?php foreach ($aTipoProductos as $tipoproducto): ?>
              <tr>
                  <td><?php echo $producto->nombre; ?></td>
                  <td><?php echo $producto-> acciones; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include_once("footer.php"); ?>