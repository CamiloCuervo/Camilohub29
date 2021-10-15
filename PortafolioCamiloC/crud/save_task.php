<?php 

include("db.php");

if(isset($_POST['save_task'])){
    $tipodoc = $_POST['tipodoc'];
    $Id_persona = $_POST['Id_persona'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];
    

    $query = "INSERT INTO persona (tipodoc, Id_persona, Nombre, Apellido, Telefono, Correo, Contraseña) VALUES ('$tipodoc', '$Id_persona', '$Nombre', '$Apellido', '$Telefono', '$Correo', '$Contraseña')";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("query failed");
    }

    $_SESSION['message'] ='task saved successfully';
    $_SESSION['message_type']= 'success';

    header("location:index.php");
}
?>