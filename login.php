<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUPERMERCADOS LA ECONOMIA AYA/Registro</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Css/normalize.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <link rel="shortcut icon" href="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" type="image/x-icon">
</head>

  <body>
  <header>
      <!-- Primero hacemos la franja roja-->
      <section class="franja-roja">      
        <img src="http://drive.google.com/uc?export=view&id=15wda6PO-RNA2s29lximfU7ZAogsy43XB" class="encierra-icono" alt="Icono de llamadas">

        <p class="neas"> <a href="tel:+5732233398438">Lineas de atención: 32233398438 - 3153400962 <a href="tel:+573153400962"></a></p>

        <a target="_blank" class="links" href="https://www.facebook.com/profile.php?id=100044680844154">
          <img src="http://drive.google.com/uc?export=view&id=1Imgm3YKNUU0jqT9LPhr4mxQpl4CQJzSe" class="ala" alt="Facebook">
        </a>

        <a target="_blank" class="links" href="https://www.youtube.com/channel/UCZ0tWaE8nD4WwMQ69FniD2A">
          <img src="http://drive.google.com/uc?export=view&id=1SkgJjIaMb_vJ10cQzCmN3PlusnY2MJ0z" class="cial" alt="YouTube">
        </a>

        <a target="_blank" class="links" href="https://web.telegram.org/k/">
          <img src="http://drive.google.com/uc?export=view&id=1RFYu17TrmI45p64EwTnw5Z4cp1eawAJu" class="cial" alt="Telegram">
        </a>

        <a target="_blank" class="links" href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin">
          <img src="http://drive.google.com/uc?export=view&id=1aN2KZ5xUdro0P0kuoAuS7jUCGjAjJ5Xj" class="cial" alt="LinkedIn">
        </a>
      </section>

      <!--Empieza el menú de navegación-->
        <nav class="barra-nave">
          <img src="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" class="Logo" alt="Logo Supermercado">

          <h1 class="titulo">SUPERMERCADOS Y <br> DISTRIBUCIONES LA <br> ECONOMIA AYA</h1>
          <p class="eslogan">¡Compras inteligentes ahorros,<br> constantes!</p>

          <ul class="menu-nav">
            <li class="nav-item"><a href="inicio.html">Inicio<i class='bx bx-home'></i></a></li>
            <li class="nav-item"><a href="productos.html">Productos</a></li>
            <li class="nav-item"><a href="plaza.html">Plaza</a></li>
            <li class="nav-item"><a href="servicios.html">Servicios</a></li>
            <li class="nav-mayo"><a href="precios_may.html">Precios<br>
            <strong>Mayoristas</strong></a></li>
            <li class="nav-acerca"><a href="acerca_nos.html">Acerca de <br>
            <strong>Nosotros<i class='bx bx-chevron-down'></i></strong></a></li>
            <li><img src="http://drive.google.com/uc?export=view&id=1Ly50udZ2RaDROYMvC-IVScBmr52ns-oZ" alt="usuario"></li>
            <li class="registrate"><a class="regis-titu" href="login.php">Registrate</a>
              <ul class="submenu">
                <li><a href="inicio_sesion.php">Iniciar Sesión</a></li>
              </ul>
          </li>
        </ul>
      </nav>
    </header>
    <!--Aqui finaliza el HEADER-->

    <!--El (login REGISTRO) de la página-->
    <main>
      <section class="login_register">
        <div class="aden-login">
          <form class="formu" action="envio_datos.php" method="post">
            <h1 class="registra">Regístrate</h1>
            <p>¡Crea tu cuenta con nosotros hoy!</p><br>
          
          <label>
            <i class='bx bx-user'></i>
            <input class="controls" type="text" id="nombre" name="bnombre_completo" placeholder="Nombre Completo" required><br>
            <br>
          </label>

          <label>
            <i class='bx bx-envelope'></i>
            <input class="controls" type="email" id="correo" name="bcorreo_electronico" placeholder="Correo Electrónico" required><br>
            <br>
          </label>

          <label>
            <i class='bx bx-phone'></i>
            <input class="controls" type="tel" id="telefono" name="bnumero_telefonico" placeholder="Número Telefónico" required><br>
            <br>
          </label>
  
          <label>
            <i class='bx bx-map'></i>
            <input class="controls" type="text" id="ciudad" name="bdepartamento" placeholder="Departamento" required><br>
            <br>
          </label>
  
          <label>
            <i class='bx bxs-city'></i>
            <input class="controls" type="text" id="ciudad" name="bciudad" placeholder="Ciudad" required><br>
            <br>
          </label>
  
          <label>
            <i class='bx bxs-user'></i>
            <input class="controls" type="text" id="nombre" name="buser_complet" placeholder="Usuario" required><br>
            <br>
          </label>

          <label>
            <i class='bx bxs-lock-alt'></i>
            <input class="controls" type="password" id="contraseña" name="bcontraseña_usu" placeholder="Contraseña" required><br>
            <br>
          </label>

            <p class="condi">Estoy de acuerdo con <a href="poli_term.html">Terminos y Condiciones</a></p><br>
            <div>
            <a href="inicio.html"><input class="register" type="submit" value="Regístrarse"></a>  
            <!-- <a class="todo-regis" href="inicio.html">Registrate</a></ul> -->
            </div>
          </form>
        </div>
      </section>
    </main>

    <!--Haremos el FOOTER-->
    <footer>
    <nav class="pie-pagina">
        <h3 class="acerca_nosotros">Acerca de Nosotros</h3>
        <img src="http://drive.google.com/uc?export=view&id=1cgM_euKNWeGdKhlzNo31Y2NulpLA8UUp" class="bica" alt="ubicación">  
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