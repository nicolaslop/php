<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class persona{
public $dni;
public $nombre;
public $edad;
public $nacionalida;

}
class alumno extends persona{
    public $legado;
    public $notaportfolio =0.0;
    public $notaphp =0.0;
    public $notaproyecto =0.0;

}
class docente extends persona{
public $especialidad;

}

?>