<?php

use Franco\App\libs\Controlador;

class Producto_Controller extends Controlador
 {
public function listar(){

       $modelo = new Producto();
       $listar=  $modelo->listar(); 
        $this->cargarVista("producto/listar", $listar);
        
}

}