<?php 

include ('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = " SELECT * FROM persona WHERE codPersona = $id";
    $result = mysqli_query ($conn, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $tipodoc = $row['tipodoc'];
        $Id_persona = $row['Id_persona'];
        $Nombre = $row['Nombre'];
        $Apellido = $row['Apellido'];
        $Telefono = $row['telefono'];
        $Correo = $row['correo'];
        $Contraseña = $row['Contraseña'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $tipodoc = $_POST['tipodoc'];
    $Id_persona = $_POST['Id_persona'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];

    $query = "UPDATE persona set tipodoc = '$tipodoc', Id_persona = '$Id_persona', Nombre = '$Nombre', Apellido = '$Apellido', Telefono = '$Telefono', Correo = '$Correo', Contraseña = '$Contraseña' WHERE codPersona = $id ";
    mysqli_query($conn, $query);

    header('location:index.php');

}

?>

<?php include('includes/header.php') ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <div class="card card-body">
                <form method="POST" action="edit.php?id=<?php echo $_GET['id'];?>">

                    <div class="form-group">
                        <input type="text" name="tipodoc" value="<?php echo $tipodoc; ?>" class="form-control" placeholder="update tipoDoc">
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Id_persona" value="<?php echo $Id_persona; ?>" class="form-control" placeholder="update numero de documento">
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Nombre" value="<?php echo $Nombre; ?>" class="form-control" placeholder="update nombres">
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Apellido" value="<?php echo $Apellido; ?>" class="form-control" placeholder="update apellidos">
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Telefono" value="<?php echo $Telefono; ?>" class="form-control" placeholder="update telefono">
                    </div><br>

                    <div class="form-group">
                        <input type="email" name="Correo" value="<?php echo $Correo; ?>" class="form-control" placeholder="update correo">
                    </div><br>

                    <div class="form-group">
                        <input type="password" name="Contraseña" value="<?php echo $Contraseña; ?>" class="form-control" placeholder="update contraseña">
                    </div><br>

                    <button type="submit" class=" btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php') ?>