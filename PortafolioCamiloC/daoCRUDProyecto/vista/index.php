<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div">
    <?php 
    $Personas=$dao->listar();
    foreach ($Personas as $key) {
        echo $key->getNumeroIdentificacion().'<br>';
        echo $key->getNombre().'<br>';
        echo $key->getApellido().'<br>';
        echo $key->getTelefono().'<br>';
        echo $key->getCorreo().'<br>';
        echo $key->getContrasena().'<br>';
    }
    ?>
</div>    
</body>
</html>