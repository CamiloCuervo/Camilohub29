<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listar</title>    
</head>
<body>
    <div class="div">
    <table class="table">
            <caption>LISTADO DE PERSONAS</caption>
            <thead>
                <tr>
                    <th>IDENTIFICACION</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TELEFONO</th>
                    <th>CORREO</th>
                    <th>CONTRASEÑA</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($Personas as $key) {
                    
                    echo "<tr><td>". $key->getNumeroIdentificacion() . "</td>";
                    echo "<td>". $key->getNombre() . "</td>";
                    echo "<td>". $key->getApellido() . "</td>";
                    echo "<td>". $key->getTelefono() . "</td>";
                    echo "<td>". $key->getCorreo() . "</td>";
                    echo "<td>". $key->getContrasena() . "</td></tr>";                   
                }?>
            </tbody>
    </table>
    </div>
</body>