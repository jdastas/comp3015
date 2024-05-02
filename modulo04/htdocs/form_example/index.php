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
<div class="container pt-4">
  <form action="guardar.php" method="post" class='form'>
    <label for="" class="form-label">Nombre</label> 
    <input type="text" name="nombre" id="nombre" class='form-control'
        placeholder='Nombre de usuario'>
    Email: <input type="email" name="email" id="email" class='form-control'>
    Clave: <input type="password" name="clave" id="clave" class='form-control'>

    <input type="submit" class='btn btn-primary mt-4'>
  </form>
  </div>
    
    </body>
    </html>