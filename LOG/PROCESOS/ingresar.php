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
                $code = json_encode($result);
                $decode=json_decode($code, true);
                $nombre= $decode['NOMBRE'];
                $rol= $decode['ROL'];
                if ($rol==1) {
                    $resu["res"] = "si";
                    $resu["msj"] = header('Location: ../../aplicativo/index.html');
                }
            } else {
                $resu["res"] = "no";
                $resu["msj"] = header('#');
            }

            echo json_encode($resu);
        }
?>