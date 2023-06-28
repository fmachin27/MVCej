<?php 
class Spdo {

  public static function conectar()  {
    $host     = constant('HOST');
    $port     = constant('PORT_DB');
    $db       = constant('DB');
    $user     = constant('USER');
    $password = constant('PASSWORD');
    $charset  = constant('CHARSET');
    try {
      $connection = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";
      $options    = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
      ];
      $pdo = new PDO($connection, $user, $password, $options);
      return $pdo;
    } catch (PDOException $e) {
      print_r('Error connection: ' . $e->getMessage());
    }
    
  }
}