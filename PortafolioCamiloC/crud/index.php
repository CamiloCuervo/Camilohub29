<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-2">
    <div class="row">
        <div class="col-md-3">

            <?php if (isset($_SESSION['message'])){?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <div class="card card-body text-center">
                <form action="save_task.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="tipodoc" class="form-control" placeholder="Tipo de Documento" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="number" name="Id_persona" class="form-control" placeholder="Documento" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Apellido" class="form-control" placeholder="apellido" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="number" name="Telefono" class="form-control" placeholder="Numero telefonico" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="email" name="Correo" class="form-control" placeholder="Correo Electronico" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="Contraseña" class="form-control" placeholder="Contraseña" autofocus>
                    </div><br>

                    <input type="submit" class='btn btn-success btn-block ' name="save_task" value="enviar">
                </form>
            </div>
        </div>
        <div class="col-md-9 ">
            <table class="table table-bordered">
                <thead class='text-center'>
                    <tr>
                        <th>tipo doc</th>
                        <th>doc</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>telefono</th>
                        <th>correo</th>
                        <th>contraseña</th>
                        <th>accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        $query = "SELECT * FROM persona";                    
                        $result_tasks = mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_array($result_tasks)) { 
                            ?>

                    <tr>
                        <td>
                            <?php echo $row['tipodoc'] ?>
                        </td>
                        <td>
                            <?php echo $row['Id_persona'] ?>
                        </td>
                        <td>
                            <?php echo $row['Nombre'] ?>
                        </td>
                        <td>
                            <?php echo $row['Apellido'] ?>
                        </td>
                        <td>
                            <?php echo $row['Telefono'] ?>
                        </td>
                        <td>
                            <?php echo $row['Correo'] ?>
                        </td>
                        <td>
                            <?php echo $row['Contraseña'] ?>
                        </td>
                        
                        <td>
                            <a href="edit.php?id=<?php echo $row['codPersona'] ?>" class='btn btn-secondary'><i class="fas fa-marker"></i></a>

                            <a href="delete_task.php?id=<?php echo $row['codPersona'] ?>" class='btn btn-danger'><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>


                    <?php  } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>