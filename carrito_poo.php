<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class cliente{
    //las propiedades padres o principales seran protegidas
    //#=protegida
    protected $dni;
    protected $nombre;
    protected $corre;
    protected $telefono;
    protected $descuento;

    public function __construct(){
        $this-> descuento = 0.0;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
         $this->$propiedad=$valor;
    }
    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Telefono: " .$this->telefono . "<br>";
        echo "Descuento: " . $this->descuento . "<br><br>";
    }

}

class producto {
    //-=protegida
    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $iva;

    public function __construct(){
        $this-> precio = 0.0;
        $this-> iva = 0.0;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
         $this->$propiedad=$valor;
    }
    public function imprimir(){
        echo "Cod: " . $this->cod . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Descripcion: " . $this->descripcion . "<br>";
        echo "IVA: " . $this->iva . "<br><br>";
    }

}
class carrito {
    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;
    //+=protegida
    public function __construct(){
        $this->aProductos = array();
        $this-> subtotal = 0.0;
        $this-> total = 0.0;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
         $this->$propiedad=$valor;
    }
    function cargarproducto($producto){
        $this->aProductos[] = $producto;


    }
    function imprimirTicket(){
        echo "<table class=" table table-hover text center">
        echo "<tr></tr>;"
        
        
        </table>";
    }


}

//Programa
$cliente1 = new cliente();
$cliente1->dni = "1063465789";
$cliente1->nombre = "nicolas";
$cliente1->correo = "nicolas@gmail.com";
$cliente1->telefono = "+573113312746";
$cliente1->descuento = 0.05;
$cliente1->imprimir();

$producto1 = new producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" LENOVO";
$producto1->descripcion = "Esta es una computadora LENOVO";
$producto1->precio = 30800;
$producto1->iva = 21;
$producto1->imprimir();

$producto2 = new producto();
$producto2->cod = "JBGH678";
$producto2->nombre = "TV LG 55\"";
$producto2->descripcion = "Televisor HD";
$producto2->precio = 60800;
$producto2->iva = 10.5;
$producto2->imprimir();

$carrito = new carrito();
$carrito->cliente = $cliente1;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrito</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php $carrito->imprimirTicket();    ?>
            </div>
        </div>
    </div>
    
</body>
</html>