<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Camilo Cuervo</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>C</span>amilo <span>C</span>uervo</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Inicio</a></li>
            <li><a href="#services" data-after="Service">Servicios</a></li>
            <li><a href="#projects" data-after="Projects">Projectos</a></li>
            <li><a href="#about" data-after="About">Sobre Mi</a></li>
            <li><a href="#contact" data-after="Contact">Contactos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- portada Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hola, <span></span></h1>
        <h1>Soy Camilo <span></span></h1>
        <h1>Conoce mas de mi trabajo de desarrollo <span></span></h1>
        <a href="#projects" type="button" class="cta">Portafolio</a>
      </div>
    </div>
  </section>
  <!-- End portada Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>cios</h1>
        <p></p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Crear y desarrollar nuevos programas o sistemas</h2>
          <p>Investigar las necesidades de los usuarios.
            Diseñar y elaborar nuevos programas.
            Probar los nuevos programas.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Evaluar sistemas nuevos y existentes</h2>
          <p>Diseñar planes de prueba para los programas nuevos desarrollados.
            Realizar pruebas para la medición de calidad en los sistemas desarrollados.
            Detectar errores en los programas.
            Corregir los errores presentes en los programas.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Mejorar programas existentes</h2>
          <p>Analizar los requerimientos y sugerencias de los usuarios.
            Crear soluciones para fallas existentes.
            Implementar las soluciones.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Proyectos<span>Recientes</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Proyecto 1</h1>
            <h2>Dao CRUD Aplicado a tabala de Proyecto</h2>
            <p>Creacion de ejemplo de PDO con metodo dao en el cual aplicamos dicha metodologia a una tabla del proyecto de formacion SENA</p>
            <a href="../PortafolioCamiloC/crud/index.php"><button>clik aqui</button></a>
          </div>
          <div class="project-img">
            <img src="./imagenes/images5.jpg" alt="imagenes">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Proyecto 2</h1>
            <h2>Operaciones Aritmeticas con Arrays JS</h2>
            <p>Ejercicio en el cual generamos un Array que fuera actualizando sus valores al recargar la pagina y creamos funciones de suma de los elementos del 
            Array y tambien funciones que diera como respuesta en consola el numero mayor ,el numero menor , y el promedio 
            de los valores del Array </p>
            <a href="../PortafolioCamiloC/EjerciciosJavaScript/ejerOperAritmeticas/index.html"><button>clik aqui</button></a>
          </div>
          <div class="project-img">
            <img src="./imagenes/images6.png" alt="imagenes">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info"> 
            <h1>Proyecto 3</h1>
            <h2>Fracciones JSON</h2>
            <p>Ejercicio de suma de fraccinarion en javaScript</p>
            <a href="../PortafolioCamiloC/EjerciciosJavaScript/ejerFraccionarios/indexfrac.html"><button>clik aqui</button></a>
          </div>
          <div class="project-img">
            <img src="./imagenes/images7.jpg" alt="imagenes">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Manuales de usuarios</h1>
            <h2>como se crea un manual de usuario y un manual tecnico</h2>
            <p>Creacion de pagina donde explicamos paso a paso como se crea un manual de usuario y un manual tecnico de software</p>
            <a href="../PortafolioCamiloC/ManualUsuario/ManualU.html"><button>Maual usuarios</button></a> 
            <br> 
            <a href="../PortafolioCamiloC/ManualUsuario/ManualT.html"><button>Manual Tecnico</button></a>
          </div>
          <div class="project-img">
            <img src="./imagenes/images8.png" alt="imagenes">
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./imagenes/images4.jpeg" alt="imagenes">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sobre<span>Mi</span></h1>
        <h2>Desarrollador Wed</h2>
        <p>Cuento con conocimiento en analisis y desarrollo de sisitemas de informacion, tengo manejo en editores de codigo
           y a su vez bases de datos ,cuento co conocimiento en HTML, CSS, PHP, JAVASCRIPT, LARAVEL, 
        </p>
        <a href="#" class="cta">Descargue HV</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Informacion<span>Contactos</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Telefono</h1>
            <h2>+57 3014391260</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>bccuervo0@misena.edu.co</h2>
            <h2>darkcrow-1@hotmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Ubicacion</h1>
            <h2>Cundinamarca, Soacha</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>C</span>amilo <span>C</span>uervo</h1>
      </div>
      <h2>Solucion Wed</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>