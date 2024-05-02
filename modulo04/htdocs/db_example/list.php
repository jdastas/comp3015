<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example 02</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

<?php  

$conexion = new mysqli("localhost", "root", "usbw", "mi_base_de_datos"); 
if($conexion->connect_error) { 
    die ("Conexión fallida: " . $conexion->connect_error); 
}
echo "<h2>Conexión exitosa</h2>";


$sql = "SELECT id, nombre, email, clave FROM usuarios"; 
$resultado = $conexion->query($sql);

echo "<h1>Lista de Usuarios</h1>";

if ($resultado->num_rows > 0) { 
    echo "<table class='table table-striped'>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Email</th><th>Clave</th></tr>";
    while($row = $resultado->fetch_assoc()) { 
        echo "<tr>";
        echo "<td>". $row["id"]. "</td><td>";
        echo $row["nombre"]. "</td><td>" . $row["email"]; 
        echo "</td><td>" . $row["clave"] . "</td>"; 
        echo "</tr>";
    } 
    echo "</table>";
} else { 
    echo "0 resultados"; 
}

?>
</div>
    
    </body>
    </html>