<?php

$host = "localhost";
$usuario = "huellitas_app";
$contrasena = "*****";
$base_datos = "conectando_huellitas";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión con la base de datos.");
}

$conexion->set_charset("utf8mb4");

?>