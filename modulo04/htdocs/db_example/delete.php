<?php

    $conexion = new mysqli("localhost", "root", "usbw", "mi_base_de_datos"); 
    if($conexion->connect_error) { 
        die ("Conexión fallida: " . $conexion->connect_error); 
    }
    echo "<h2>Conexión exitosa</h2>";

    
    $sql = "DELETE FROM usuarios WHERE id=4"; 
    if ($conexion->query($sql) === TRUE) { 
     echo "Registro eliminado con éxito"; 
    } else { 
        echo "Error al eliminar el registro: ";
        echo $conexion->error; 
    }
    

?>