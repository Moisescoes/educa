<?php
function crearConexion()
{
    $server_name = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "educav2";

    //Crear conexion
    $conn = new mysqli($server_name, $username, $password, $database_name);

    //Verificar la conexion
    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    }

    return $conn;
}

function cerrarConexion($conn)
{
    //Cerrar conexion
    $conn->close();
}