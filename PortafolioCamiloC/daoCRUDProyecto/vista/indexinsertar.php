<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/insertar.css">
    <title>Formulario de Registro</title>
</head>
<body>
<nav class="nav">
                <ul class="menu">
                    
                    <li class="menu_item"><a class="menu_link" href="http://localhost/camilo2142329/PortafolioCamiloC/index.html">portafolio</a></li>
                    <li class="menu_item"><a class="menu_link" href="http://localhost/camilo2142329/PortafolioCamiloC/daoCRUDProyecto/vista/indexlistar.php">listar</a></li>
                    
                    
                    
                </ul>
            </nav>
<section>
	<a href="http://localhost/camilo2142329/PortafolioCamiloC/daoCRUDProyecto/vista/indexinicio.php"><section id="texto"><center>FRUVER MCP</center></a></section>
	</section>
	
	
	<section id="cuerpo">
        <br>
        <form id="form2" action="../controlador/controladorregistro.php", method="GET">
				<br>
				<p><strong id="Registrarse"><center>REGISTRARSE</center></strong></p>
				<br>
				<br>
				<label>Codigo Persona</label>
				<input type="text" placeholder="Codigo Persona"  required name="codPersona" id="codPersona" class="form-control">
				<br>
				<br>
				<label>Tipo Documento</label>
				<input type="text" placeholder="Tipo de Documento"  name="tipodoc" id="tipodoc" class="form-control">
				<br>
				<br>
				<label>Numero de Identificacion</label>
				<input type="text" placeholder="Numero de Identificacion" minlength="7" maxlength="10" required name="Identificacion" id="Identificacion" class="form-control">
				<br>
				<br>
				<label>Nombres</label>
				<input type="text" placeholder="Digite Nombres" required name="Nombre" id="Nombre" class="form-control">
				<br>
				<br>
				<label>Apellidos</label>
				<input type="text" placeholder="Digite Apellidos" required name="Apellido" id="Apellido" class="form-control">
				<br>
				<br>
				<label>Telefono</label>
				<input type="text" placeholder="Telefono" minlength="10" maxlength="10" required name="Telefono" id="Telefono" class="form-control">
				<br>
				<br>
				<label>Correo</label>
				<input type="email" pattern=".+@gmail.com" placeholder="Correo" required name="Correo" id="Correo" class="form-control">
				<br>
				<br>
				<label>Contraseña</label>
				<input type="password" placeholder="Nueva Contraseña" required tyle="text-transform:uppercase" name="Contraseña" id="Contraseña" class="form-control">
				<br>
				<br>
				</select>
				<br>
				<br>
				<input type="submit" value="Registrarse" name="boton" class="btn btn-primary">
                
		</form>
		
	</section>
    
</body>
</html>