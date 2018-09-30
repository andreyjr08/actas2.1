<?php
 use clases_pdo\funcion_logC;
    if (isset($_POST) && !empty($_POST)) {
        require('../funcion_log.php');
        $resu = array();
        $usuario = $_POST['usuario'];
        $contra =  $_POST['contra'];
        echo $usuario . "--" .$contra;
        $ins = new funcion_logC();
        $result = $ins->log($usuario, $contra);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "Registro insertado";
            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>