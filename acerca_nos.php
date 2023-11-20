<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMERCADOS LA ECONOMIA AYA/Acerca Nosotros</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="shortcut icon" href="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  </head>

  <body>
    <?php
      session_start();
      if (!isset($_SESSION["buser_complet"])) {
      // Redirigir al usuario a la página de inicio de sesión
      header("Location: inicio_sesion.php");
      exit();
    }
    ?> 
    <header>
      <!-- Primero hacemos la franja roja-->
      <section class="franja-roja">      
        <img src="http://drive.google.com/uc?export=view&id=15wda6PO-RNA2s29lximfU7ZAogsy43XB" class="encierra-icono" alt="Icono de llamadas">

        <p class="lineas"> <a href="tel:+5732233398438">Lineas de atención: 32233398438 - 3153400962 <a href="tel:+573153400962"></a></p>

        <a target="_blank" class="links" href="https://www.facebook.com/profile.php?id=100044680844154">
          <img src="http://drive.google.com/uc?export=view&id=1Imgm3YKNUU0jqT9LPhr4mxQpl4CQJzSe" class="sociala" alt="Facebook">
        </a>

        <a target="_blank" class="links" href="https://www.youtube.com/channel/UCZ0tWaE8nD4WwMQ69FniD2A">
          <img src="http://drive.google.com/uc?export=view&id=1SkgJjIaMb_vJ10cQzCmN3PlusnY2MJ0z" class="social" alt="YouTube">
        </a>

        <a target="_blank" class="links" href="https://web.telegram.org/k/">
          <img src="http://drive.google.com/uc?export=view&id=1RFYu17TrmI45p64EwTnw5Z4cp1eawAJu" class="social" alt="Telegram">
        </a>

        <a target="_blank" class="links" href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin">
          <img src="http://drive.google.com/uc?export=view&id=1aN2KZ5xUdro0P0kuoAuS7jUCGjAjJ5Xj" class="social" alt="LinkedIn">
        </a>
      </section>

      <!--Empieza el menú de navegación-->
        <nav class="barra-nave">
          <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" class="Logo" alt="Logo Supermercado">

          <h1 class="titulo">SUPERMERCADOS Y <br> DISTRIBUCIONES LA <br> ECONOMIA AYA</h1>
          <p class="eslogan">¡Compras inteligentes ahorros,<br> constantes!</p>

          <ul class="nav-barra">
            <li class="nav-item"><a href="inicio.php">Inicio<i class='bx bx-home'></i></a></li>
            <li class="nav-item"><a href="productos.php">Productos</a></li>
            <li class="nav-item"><a href="plaza.php">Plaza</a></li>
            <li class="nav-item"><a href="servicios.php">Servicios</a></li>
            <li class="nav-mayo"><a href="precios_may.php">Precios<br>
            <strong>Mayoristas</strong></a></li>
            <li class="nav-acerca"><a href="acerca_nos.php">Acerca de <br>
            <strong>Nosotros<i class='bx bx-chevron-down'></i></strong></a></li>
            <li><img src="http://drive.google.com/uc?export=view&id=1gQEfUh73GiC-aImOyq1uvO4UUWsrt2De" alt="cerrar"></li>
            <li class="sesion"><a class="regis-titu" href="cerrar.php">Cerrar Sesión</a></li>
        </ul>
      </nav>
    </header>
    <!--Aqui finaliza el HEADER-->

    <!--CONTENIDO PRINCIPAL DE LA PÁGINA-->
    <main>
    <section>
        <article class="quienes-somos">
          <h3>QUIÉNES SOMOS</h3> <br>
          <p class="separacion-renglones">
          Somos una empresa pequeña que nació en el mes de Marzo del año 2021 durante una época que represento uno de los 
          momentos más difíciles en el aspecto económico <br> a nivel mundial debido a la pandemia de COVID-19, pese a está 
          situación logramos adaptarnos a las condiciones del mercado, salir adelante y convertirnos en lo que somos <br> ahora. 
          Contamos con 3 años ya de experiencia. <strong>Estamos ubicados en la ciudad de Neiva-Huila; contamos con dos sucursales, 
          ubicadas en los barrios Santa Isabel y Machines.</strong><br> Nos hemos caracterizado siempre tener como objetivo
          principal ofrecerle a nuestros clientes una amplia variedad de productos de la canasta familiar, más verduras y frutas<br> 
          En segundo lugar, el servicio de calidad que ofrecemos es muy eficiente, personalizado, optimo y atento a las necesidades
          de la gente, con esto esperamos generar un impacto <br> positivo en nuestros clientes para que se lleven una experiencia
          de compra agradable.</p> <br> <br>

          <h3>NUESTRA MISIÓN</h3> <br>
          <p class="separacion-renglones">En <strong>SUPERMERCADOS LA ECONOMIA AYA</strong>, nuestra misión es brindar a nuestros
          clientes una experiencia de compra inigualable, ofreciendo una amplia gama de productos <br> de calidad que satisfagan sus
          necesidades en la canasta familiar,verduras y frutas. Nos enorgullece haber surgido en medio de desafíos económicos
          globales, y a lo largo de <br> nuestros tres años de experiencia, hemos demostrado nuestra capacidad de adaptación y
          compromiso con la comunidad de Neiva-Huila. Nuestro objetivo principal es ser el <br> destino preferido de compras para
          nuestros clientes, proporcionando un servicio eficiente y personalizado que genere un impacto positivo en sus vidas y
          hogares.</p> <br><br>

          <h3>NUESTRA VISIÓN</h3> <br>
          <p class="separacion-renglones">En <strong>SUPERMERCADOS LA ECONOMIA AYA</strong>, aspiramos a convertirnos en un
          referente destacado en la industria minorista de Neiva-Huila y sus alrededores. Buscamos <br> expandir nuestra presencia y
          alcanzar un crecimiento sostenible, manteniendo siempre nuestra dedicación a la calidad y la satisfacción del cliente.
          Visualizamos un futuro <br> en el que nuestras dos sucursales sean puntos de referencia en la comunidad, ofreciendo no
          solo productos esenciales, sino también innovación y excelencia en el servicio.<br> A medida que avanzamos, continuaremos
          adaptándonos a las cambiantes necesidades del mercado y contribuyendo al bienestar de la comunidad a la que servimos.</p>
        </article>
      </section>
    </main>
    <br>

    <!--Haremos el FOOTER-->
    <footer>
      <nav class="pie-pagina">
        <h3 class="acerca_nosotros">Acerca de Nosotros</h3>
        <img src="http://drive.google.com/uc?export=view&id=1cgM_euKNWeGdKhlzNo31Y2NulpLA8UUp" class="ubica" alt="ubicación">  
          <ul class="primera-columna">
            <p class="caluroso">Neiva - Huila</p><br>
            <li class="Calle">Calle 10 Sur No. 21-92</li>
            <p class="isab">Santa Isabel</p>
            <li class="Carre">Cra 52 #26 A 03 Olaya</li>
            <p class="Olaya">Herrera</p>
          </ul>

        <h3 class="importante">Importante</h3>
          <ul class="info-foot">
          <li><a href="poli_term.html">Política Privacidad - <p class="condi">Términos y Condiciones</a></li></p>
          <li class="inten"><a target="_blank" href="https://www.sic.gov.co/">Superintendencia de
              <p class="indus">Industria y Comercio SIC</a></li></p>
          </ul>

        <h3 class="contacto-dueños">Contactanos</h3>
        <img src="http://drive.google.com/uc?export=view&id=1DcvccSHxYHd1OSD26AensbrgZRonTllo" class="atencion" alt="Horario atención">
        <img src="http://drive.google.com/uc?export=view&id=15Z8obCYh_3lHY_N8aDpixQxqmI3KyNk2" class="correo-uno" alt="Correo uno">
        <img src="http://drive.google.com/uc?export=view&id=15Z8obCYh_3lHY_N8aDpixQxqmI3KyNk2" class="correo-dos" alt="Correo dos">  
        <p class="horario-atencion">Horario de atención: lunes a<br> domingos de 6:00 a.m a 8:30 p.m</p>  
        <p class="dueño-uno">Cristiancaya@hotmail.com</p>
        <p class="dos-dueño">Edwin10andres@gmail.com</p>
        <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" class="logo-super" alt="Logo Supermercado">
        <p class="derechos">©2023.SUPERMERCADOS LA ECONOMIA AYA <br>|Todos los derechos reservados</p> 
        <p class="datos-person">01 8000 456220|Política de Tratamiento de Datos Personales</p>
      </nav>
    </footer>
  </body>
</html>