<?php

include_once "config.php";
include_once "entidades/venta.php";
$pg = "Listado de Ventas";

$venta = new   Venta();
$aVentas = $venta->obtenerTodos();
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
                <th>fecha</th>
                <th>cantidad</th>
                <th>producto</th>
                <th>cliente</th>
                <th>total</th>
                <th>acciones</th>
            </tr>
            <?php foreach ($aventas as $venta): ?>
              <tr>
                  <td><?php echo $venta->fecha; ?></td>
                  <td><?php echo $venta-> cantidad; ?></td>
                  <td><?php echo $venta->fk_idproducto; ?></td>
                  <td><?php echo $venta-> fk_idcliente; ?></td>
                  <td><?php echo $venta->total; ?></td>
                  <td style="width:100px ;">
                  <a href="venta-formulario.php?id =<?php echo $ventas->idventas; ?><i class=fas fa-search "
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include_once("footer.php"); ?>