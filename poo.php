<?php

use Alumno as GlobalAlumno;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class persona{
        //las propiedades padres o principales seran protegidas
        protected $dni;
        protected $nombre;
        protected $edad;
        protected $nacionalida;

        public function setDni($dni){$this->dni = $dni; }
        public function getDni(){ return $this->dni; }

        public function setNombre($nombre){$this->nombre = $nombre; }
        public function getNombre(){ return $this->nombre; }

        public function setEdad($edad){$this->edad = $edad; }
        public function getEdad(){ return $this->edad; }

        public function setNacionalidad($nacionalida){$this->nacionalidad = $nacionalida; }
        public function getNacionalidad(){ return $this->nacionalidad; }

        //las funciones son publicas
    public function imprimir(){

    }

}
class alumno extends persona{
    //las propiedades hijas o secundarias seran privadas
    private $legado;
    private $notaportfolio;
    private $notaphp;
    private $notaproyecto;

    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
         $this->$propiedad=$valor;
    }

    public function __construct(){
            $this-> notaportfolio = 0.0;
            $this-> notaphp = 0.0;
            $this-> notaproyecto = 0.0;

    }
    public function __destruct () {
        echo "destruyendo el objeto  " . $this->nombre . "<br>";
    }
    public function imprimir() {
        echo "Alumno: " . $this->nombre . "<br>";
        echo "documento: " . $this->dni . "<br>";
        echo "nota portfolio: " . $this->notaportfolio ."<br>";
        echo "nota php: " . $this->notaphp ."<br>";
        echo "nota proyecto: " . $this->notaproyecto ."<br><br>";


    }
    public function calcularpromedio(){

    }

}
class docente extends persona{
    public $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO =  "Economia aolicada";
    const ESPECIALIDAD_BBDD = "Base de datos"; 

        public function __destruct () {
          echo "destruyendo el objeto  " . $this->nombre . "<br>";
        }
        public function imprimir(){
            echo "nombre del docente " . $this->nombre . "<br>";
            echo "especialidad " . $this->especialidad . "<br><br>";
    
        }
        public function imprimirhabilidadeshabilitadas(){
            echo "especialidades: " . "<br>";
            echo self::ESPECIALIDAD_WP . "<br>";
            echo self::ESPECIALIDAD_ECO . "<br>";
            echo self::ESPECIALIDAD_BBDD . "<br><br>";

    } 

}
//programa

$alumno1 = new Alumno ();
$alumno1-> nombre ="rudy sosa";
$alumno1-> dni = "1034567893";
$alumno1-> edad = "27";
$alumno1-> nacionalida ="colombia";
$alumno1-> notaphp = 8;
$alumno1-> notaportfolio= 7;
$alumno1-> notaproyecto = 10;
$alumno1->imprimir();

$alumno2 = new Alumno ();
$alumno2-> nombre ="nicolas lopez";
$alumno2-> dni = "1010401456";
$alumno2-> edad = "26";
$alumno2-> nacionalida ="colombia";
$alumno2-> notaphp = 9;
$alumno2-> notaportfolio= 6;
$alumno2-> notaproyecto = 8;
$alumno2->imprimir();

$docente = new docente();
$docente->nombre = "andres buitrago";
$docente-> especialidad = docente::ESPECIALIDAD_ECO;
$docente->imprimir(); 
$docente->imprimirhabilidadeshabilitadas();

?>