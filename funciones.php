<?php

function conexion($tabla, $usuario, $password){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $password);
        return $conexion;
    } catch(PDOException $e){
        return false;
    }
}

?>