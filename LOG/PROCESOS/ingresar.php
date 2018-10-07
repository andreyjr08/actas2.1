<?php
 use clases_pdo\funcionLog;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../funcion_log.php');
        $resu = array();
        $usuario = $_POST['usuario'];
        $contra =  $_POST['contra'];
        $ins = new funcionLog();
        $result = $ins->log($usuario,$contra);
        if($result) {
                $resu["res"] = "si";
                $resu["msj"] = "Registro insertado";  
            } else {
                $resu["res"] = "no";
                $resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($result) ;
        }
?>