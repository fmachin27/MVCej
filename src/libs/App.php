<?php
namespace Franco\App\libs;



class app
{

public static function iniciar()  
 {

  $c           = $GET['c'] ?? "index";
  $m           = $GET['m'] ?? "index";
  $con         = ucfirst($c) . "_Controller";
  $controllerPath = 'src/controllers/' . $con . ".php";
  require_once $controllerPath;
  $controller = new $con();
  $controller->{$m}();

 }

}