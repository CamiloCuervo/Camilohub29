<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloFormulario.css">
    <title>FUNCIONES Y ARREGLOS</title>
</head>
<body>
    <form action="funciones.php" method="POST"">
        <label for="">Tamaño de los Numeros</label>
        <input type="number" name="num">
        <br>
        <input type="submit" name="enviar">
    </form>

    
<?php
   include ("funciones.php");
?>
    
</body>
</html>