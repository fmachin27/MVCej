<?php
namespace Franco\App\controllers;
use Franco\App\libs\Controlador;

class Index_Controller extends Controlador {
   
  public function index()
  {
  
$this->cargarVista("index/index","datoDemo");
}
   }

