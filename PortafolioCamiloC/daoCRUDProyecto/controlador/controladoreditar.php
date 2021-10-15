<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/indexeditar.php');
require('../dao/DaoPersonaImpl.php');
$dao=new DaoPersonaImpl();
if (isset($_GET['boton'])) {
    $id_persona=$_GET['Identificacion'];
    $nombre=$_GET['Nombre'];
     $apellido=$_GET['Apellido'];
     $telefono=$_GET['Telefono'];
     $correo=$_GET['Correo'];
     $contrasena=$_GET['Contraseña']; 
     $a=new Persona($id_persona,$nombre,$apellido,$telefono,$correo,$contrasena);
    $dao->modificar($a);
    echo "REGISTRO MODIFICADO CON EXITO";    
}
           
?>  
</body>
</html>