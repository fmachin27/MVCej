<?php

namespace Franco\App\Modelo;

use Spdo;
use PDOException;

class Producto
{
  //"SELECT id_productos, codigo,descripcion,precio,fecha FROM `productos`;"
  private $id;

  private $codigo;

  private $descripcion;

  private $precio;

  private $fecha;

  public function __construct($id, $codigo, $descripcion, $precio, $fecha)
  {
    $this->id = $id;
    $this->codigo = $codigo;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->fecha = $fecha;
  }

  public function listar()
  {
    $pdo = Spdo::conectar();
    try {
      $query = $pdo->query("select id_productos, codigo,descripcion,precio,fecha from `productos`");
       $clientes = [];
      while ($row = $query -> fetch()) {
         $cliente = new Producto($row ['id'],$row['codigo'], $row['precio'],$row['descripcion'],$row['fecha']);
           $clientes [] = $cliente;
      }
    } catch (PDOException $ex) {
       var_dump($ex);
    } finally {
      $pdo = null;
    }
  }
  
}