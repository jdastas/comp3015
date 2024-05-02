<?php

$conexion = new mysqli("localhost", "root", "usbw", "mi_base_de_datos"); 
if($conexion->connect_error) { 
    die ("Conexión fallida: " . $conexion->connect_error); 
}
echo "<h1>Conexión exitosa</h1>";

$sql = "INSERT INTO usuarios (nombre, email, clave) " .
        " VALUES ('Peter', 'peter@email.com', 'supersecreto')"; 
if($conexion->query($sql) === TRUE) { 
    echo "<h2>Nuevo récord fue creado con éxito</h2>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error; 
}

?>