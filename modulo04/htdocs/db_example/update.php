<?php

    $conexion = new mysqli("localhost", "root", "usbw", "mi_base_de_datos"); 
    if($conexion->connect_error) { 
        die ("Conexión fallida: " . $conexion->connect_error); 
    }
    echo "<h2>Conexión exitosa</h2>";

    
    $sql = "UPDATE usuarios SET nombre='Pedro', email = 'pedro@email.com' WHERE id=4"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro actualizado con éxito"; 
    } else { 
        echo "Error actualizando el registro: ";
        echo  $conexion->error; 
    }

?>