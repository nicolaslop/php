<?php

use persona as GlobalPersona;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("America/Bogota");

class persona{
    //las propiedades padres o principales seran protegidas
    //#=protegida
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;
}

class cliente extends Persona{
    //las propiedades hijas o secundarias seran privadas
    //-=privada
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    //+ = publico = las funciones siempre seran publicas
    public function __construct(){
        $this-> fechaAlta = date("d/m/y");
        $this-> aTarjetas = array();
        $this-> bActivo = true;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
         $this->$propiedad=$valor;
    }
    public function agregarTarjeta ($tarjeta){
        $this-> aTarjetas[] = $tarjeta;
    }
    public function imprimirListado(){
        
    }
    public function darDeBaja($fechaBaja){
        $this->fechaAlta = false;
        $this->fechaBaja = $fechaBaja;
    }

}
class tarjeta{
    //las propiedades hijas o secundarias seran privadas
    //-=privada
    private $nombreTitular;
    private $numero;
    private $fechaVto;
    private $tipo;
    private $cvv;

    const VISA = "Visa";
    const AMEX = "American Express";
    const MASTERCARD = "Visa";
    const NARANJA = "Naranja";
    const CABAL = "Cabal";

    public function __construct( $tipo, $numero,  $fechaVto,$cvv){
        $this-> tipo = $tipo;
        $this-> numero = $numero;
        $this-> fechaVto = $fechaVto;
        $this-> cvv= $cvv;  
        
    }


    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
         $this->$propiedad=$valor;
    }

}

//programa
$cliente1 = new cliente();
$cliente1->dni = "1016574897";
$cliente1->nombre = "Nicolas Lopez";
$cliente1->correo = "nicol@mail.com";
$cliente1->celular = "3123456782";

$tarjeta1 = new tarjeta(tarjeta::VISA, "4081292469539412","04/2024", "420");
$tarjeta2 = new tarjeta(tarjeta::AMEX, "340835708394000","12/2026", "770");
$tarjeta3 = new tarjeta(tarjeta::MASTERCARD, "4997078189414603","05/2022", "801");
//es la misma funcion con diferentes metodos 
$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);


$cliente2 = new cliente();
$cliente2->dni = "10145674376";
$cliente2->nombre = "Andres Buitrago";
$cliente2->correo = "andresb@mail.com";
$cliente2->celular = "3115467249";
//es la misma funcion con diferentes metodos
$cliente2->agregarTarjeta(new tarjeta(tarjeta::CABAL, "4081292469539412","04/2024", "420"));
$cliente2->agregarTarjeta(new tarjeta(tarjeta::NARANJA, "340835708394000","12/2026", "770" ));
//print_r($cliente1);
//print_r($cliente2);

?>
