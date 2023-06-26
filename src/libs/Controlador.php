<?php
namespace Franco\App\libs;
class Controlador {
   
   public $datos;
   public function __construct() {

}
        function cargarVista($vistaRuta,$datos)  {
           $this->datos = $datos;
            $ruta = "src/vista/{$vistaRuta}.php";
            require_once $ruta;
        
        }
    }
