<?php
namespace Franco\App\modelo;

class Persona 
{
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre = "",$edad = "",$apellido = "")
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->apellido = $apellido;
    }

    public function listar() {
    $lista[]=new Persona("Diego","Forlan",45);
    $lista[]=new Persona("Cuqui","Baisionero",22);
    return $lista;
    }
    
   

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }
}