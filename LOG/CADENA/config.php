<?php
$usuario = 'root';
$contraseña = '';
try {
    $mbd = new PDO('mysql:host=localhost;dbname=actas2.1', $usuario, $contraseña);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
