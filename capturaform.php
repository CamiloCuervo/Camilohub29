<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Camptura</title>
</head>
<body>
    <form method="GET" action="resultado.php">
        <p>Ingrese la logitud del arreglo</p>
        <label>Longitud:</label>
        <input type="text" name="longitud">
        <br>
        <br>         
        <input type="submit" name="enviar">
    </form>
    <?php
     include ("funciones.php");
    ?>
    
</body>
</html>