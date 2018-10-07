<?php 
namespace clases_pdo;
require("CADENA/config.php");
class funcionLog{
    private $usuario;
    private $contra;
    private $pdo;
    public function __construct(){
    $this->pdo = new config();
    }
    public function log($usuario,$contra){
        $resu = array();
        $pdo = $this->pdo;
        $sql = "SELECT * FROM log WHERE CEDULA = '$usuario' AND CONTRASENA= '$contra'";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'CEDULA' => $this->usuario,
            'CONTRASENA' => $this->contra,
            ]);
        $valor= mysql_fetch_array($result);

            return $valor;
    }
}
 ?>