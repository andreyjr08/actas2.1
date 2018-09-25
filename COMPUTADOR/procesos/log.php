<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $usuario = $_POST['usuario'];
        $contra =  $_POST['contra'];
        echo $usuario . "--" .$contra;
        $ins = new funciones();
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
