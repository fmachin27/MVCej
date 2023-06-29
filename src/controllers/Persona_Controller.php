<?php

use Franco\App\libs\Controlador;

class Persona_Controller extends Controlador
 {
public function listar(){

        $modelo = new Persona();
        $listar=  $modelo->listar();
        $this->cargarVista("persona/listar", $lista);
        
}

}