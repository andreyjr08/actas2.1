<?php 
namespace clases_pdo;
require("CADENA/config.php");
class funcion_logC{
    private $usuario;
    private $contra;
    private $pdo;
    public function __construct(){
    $this->pdo = new config();
    }

    public function log($contra){
        $pdo = $this->pdo;
        $sql = "SELECT * FROM log WHERE CEDULA = :contra";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute([
            'CEDULA' => $contra
            ]);
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

}

 ?>