<?php

class venta 
{
    private $idventa;
    private $fecha;
    private $cantidad;
    private $precio_unit;
    private $total;
    private $fk_idcliente;
    private $fk_producto;

    public function __construct()
    {
        $this->cantidad= 0.0;
        $this->total= 0.0;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }

    public function cargarFormulario($request)
    {
        $this->idventa = isset($request["id"]) ? $request["id"] : "";
        $this->cantidad = isset($request["txtCantidad"]) ? $request["txtCantidad"] : "";
        $this->precio_unit = isset($request["txtPrecio_unit"]) ? $request["txtPrecio_unit"] : "";
        $this->total = isset($request["txtTotal"]) ? $request["txtTotal"] : "";
        $this->fk_idcliente = isset($request["lstCliente"]) ? $request["lstCliente"] : "";
        $this->fk_idproducto = isset($request["lstProducto"]) ? $request["lstProducto"] : "";
        if (isset($request["txtAnio"]) && isset($request["txtMes"]) && isset($request["txtDia"])) {
            $this->fecha_nac = $request["txtAnio"] . "-" . $request["txtMes"] . "-" . $request["txtDia"];
        }
    }

    public function insertar()
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO ventas (
                    fecha,
                    cantidad,
                    precio_unit,
                    total,
                    fk_idcliente,
                    fk_idproducto,
                ) VALUES (
                    '$this->fecha',
                    '$this->cantidad',
                    '$this->precio_unit',
                    '$this->total',
                    $this->fk_idcliente,
                    $this->fk_idproducto,
                );";
        // print_r($sql);exit;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idcliente = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE ventas SET
                fecha = '" . $this->fecha . "',
                cantidad = " . $this->cantidad . ",
                precio_unit = '" . $this->precio_unit . "',
                total = " . $this->total . ",
                fk_idcliente =  '" . $this->fk_idcliente . "',
                fk_idproducto =  '" . $this->fk_idproducto . "','
                WHERE idventa = " . $this->idventa;

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "DELETE FROM ventas WHERE idventa = " . $this->idventa;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function obtenerPorId()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT idventa,
                        fecha,
                        cantidad,
                        precio_unit,
                        total,
                        fk_idcliente,
                        fk_idproducto,
                FROM ventas
                WHERE idventa = $this->idventa";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->idventa = $fila["idventa"];
            $this->cantidad = $fila["cantidad"];
            $this->precio_unit = $fila["precio_unit"];
            $this->total = $fila["total"];
            if(isset($fila["fecha"])){
                $this->fecha_nac = $fila["fecha"];
            } else {
                $this->fecha = "";
            }
            $this->fk_idcliente = $fila["fk_idcliente"];
            $this->fk_idproducto = $fila["fk_idproducto"];
        }
        $mysqli->close();

    }

     public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT 
                    idventa,
                    fecha,
                    cantidad,
                    precio_unit,
                    total,
                    fk_idcliente,
                    fk_idproducto,
                FROM ventas";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo

            while($fila = $resultado->fetch_assoc()){
                $entidadAux = new Venta();
                $entidadAux->idventa = $fila["idventa"];
                $entidadAux->cantidad = $fila["cantidad"];
                $entidadAux->precio_unit = $fila["precio_unit"];
                $entidadAux->total = $fila["total"];
                if(isset($fila["fecha"])){
                    $entidadAux->fecha_nac = $fila["fecha"];
                } else {
                    $entidadAux->fecha = "";
                }
                $entidadAux->fk_idcliente = $fila["fk_idcliente"];
                $entidadAux->fk_idproducto = $fila["fk_idproducto"];
                $aResultado[] = $entidadAux;
            }
        }
        return $aResultado;
    }

}
?>