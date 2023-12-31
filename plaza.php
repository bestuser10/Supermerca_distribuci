<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMERCADOS LA ECONOMIA AYA/Plaza</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="shortcut icon" href="http://drive.google.com/uc?export=view&id=1SfSqPSFSHSOKbNPkrRsXGHPhFvOiQIEg" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script src="scrip_telegram.js"></script>
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
            <div class="float-tele">
              <img src="http://drive.google.com/uc?export=view&id=1EfPZU41xnEg-Y4_K5C7fkanuzrCt7FrU" class="telegram" 
              alt="App Telegram" onclick="window.open('https://t.me/supereconomiaaya', 'telegram', 'width=700, height=700');">
            </div>
      </header>
      <!--Aqui finaliza el HEADER-->

      <!--CONTENIDO PRINCIPAL DE LA PÁGINA-->
      <main class="plazaa">
          <div class="frutas">
            <h2>FRUTAS Y VERDURAS</h2>
          </div>

          <!-- Primer Fila -->
          <section class="lilo">
            <div class="naranja">
              <img src="http://drive.google.com/uc?export=view&id=1iRCgSg7CSoX2WFWyONkvADjo3fggSbl0" alt="Naranja">
            </div>
              <div class="precio-naranja">
                <p class="negrita">Naranja x 500 gramos <br> 
                  <p class="precios-naranja">$800</p>
              </div>

            <div class="banana">
              <img src="http://drive.google.com/uc?export=view&id=1kBBZ1PJNVh-AYmCdhhAp75bNheKcq1XK" alt="Banano">
            </div>
              <div class="precio-banano">
                <p class="negrita">Banano x 500 gramos <br> 
                  <p class="precios-banano">$1500</p>
              </div>

            <div class="manzana">
              <img src="http://drive.google.com/uc?export=view&id=1Mw4XxhXcJNO8Cwmv9MeUyKPWxg_wDewK" alt="Manzana">
            </div>
              <div class="precio-manzana">
                <p class="negrita">Manzana x Unidad <br> 
                  <p class="precios-manzana">$2000</p>
              </div>

            <div class="granadilla">
              <img src="http://drive.google.com/uc?export=view&id=1YFiSHAuCnJa4OgpCGHp7RUU_pFruesE1" alt="Granadilla">
            </div>
              <div class="precio-granadilla">
                <p class="negrita">Granadilla x 500 gramos <br> 
                  <p class="precios-granadilla">$4000</p>
              </div>

          <!-- SEGUNDA FILA -->
            <div class="lulo">
              <img src="http://drive.google.com/uc?export=view&id=15TgCZzL49tSkOEV1X4Fi6zoUNWpdo4eu" alt="Lulo">
            </div>
              <div class="precio-lulo">
                <p class="negrita">Lulo x 500 gramos <br> 
                  <p class="precios-lulo">$2900</p>
              </div>

            <div class="maracuya">
              <img src="http://drive.google.com/uc?export=view&id=1Oxm0bfp9HoJz9muqaci8egKBnUh0dHse" alt="Maracuyá">
            </div>
              <div class="precio-maracu">
                <p class="negrita">Maracuyá x 500 gramos <br> 
                  <p class="precios-maracu">$2000</p>
              </div>

            <div class="tomate-arbol">
              <img src="http://drive.google.com/uc?export=view&id=1baT-tDnxGs13MSC0ghgvdOXv9EvFnzZ-" alt="Tomate de Árbol">
            </div>
              <div class="precio-arbol">
                <p class="negrita">Tomate de Árbol x 500 gramos <br> 
                  <p class="precios-arbol">$2400</p>
              </div>

            <div class="mora">
              <img src="http://drive.google.com/uc?export=view&id=1WeuWsvBZnwmP-YP-HjZceYQW5IdQXTlq" alt="Mora">
            </div>
              <div class="precio-mora">
                <p class="negrita">Mora x 500 gramos <br> 
                  <p class="precios-mora">$2500</p>
              </div>

          <!-- TERCERA FILA -->
            <div class="papa-comun">
              <img src="http://drive.google.com/uc?export=view&id=1RW-0EOYOinO3GC413j0lIBqVHcMf2hIU" alt="Papa Común">
            </div>
              <div class="precio-comun">
                <p class="negrita">Papa Común x 500 gramos <br> 
                  <p class="precios-comun">$1000</p>
              </div>

            <div class="papa-crio">
              <img src="http://drive.google.com/uc?export=view&id=1_EjALu7ld3DNAydUQhw7ibGWGd6J5HTc" alt="Papa Criolla">
            </div>              
              <div class="precio-criolla">
                <p class="negrita">Papa Criolla x 500 gramos <br> 
                  <p class="precios-criolla">$2500</p>
              </div>

            <div class="tomate">
              <img src="http://drive.google.com/uc?export=view&id=1ptY-sbnQEb4HLFcXDOtFRD3h0jiIOlW0" alt="Tomate">
            </div>
              <div class="precio-tomate">
                <p class="negrita">Tomate x 500 gramos <br> 
                  <p class="precios-tomate">$2450</p>
              </div>

            <div class="plata-verde">
              <img src="http://drive.google.com/uc?export=view&id=1gcVDJuNeoitk2jBSG1-5YF96088b5WmV" alt="Plátano Verde">
            </div>
              <div class="platano-verde">
                <p class="negrita">Plátano Verde x 500 gramos <br> 
                  <p class="precios-verde">$900</p>
              </div>

          <!-- FILA CUATRO -->
            <div class="zanahoria">
              <img src="http://drive.google.com/uc?export=view&id=15FeBIAqzBBXcnkwxCccV0VNOQrde3EtB" alt="Zanahoria">
            </div>
              <div class="precio-zanah">
                <p class="negrita">Zanahoria x 500 gramos <br> 
                  <p class="precios-zanahoria">$2000</p>
              </div>

            <div class="Cebolla-normal">
              <img src="http://drive.google.com/uc?export=view&id=1r1pwVUKfSxeMbuUuQwf2DhB4w6P5JkGv" alt="Cebolla Cabezona">
            </div>
              <div class="precio-cebolla">
                <p class="negrita">Cebolla Cabezona x 500 gramos <br> 
                  <p class="precios-cabezona">$2400</p>
              </div>

            <div class="cabezona-roja">
              <img src="http://drive.google.com/uc?export=view&id=13DqDOi-t-tsP4SF-i5zIBvYf-z9sUUjX" alt="Cabezona Roja">
            </div>
              <div class="precio-roja">
                <p class="negrita">Cebolla Roja x 500 gramos <br> 
                  <p class="precios-roja">$3950</p>
              </div>

            <div class="cilantro">
              <img src="http://drive.google.com/uc?export=view&id=1oAnaJolvMHmO_23LrQBOKMkO4okDajCM" alt="Cilantro">
            </div>
              <div class="precio-cilantro">
                <p class="negrita">Cilantro x 500 gramos <br> 
                  <p class="precios-cilantro">$7000</p>
              </div>

          <!-- FILA CINCO -->
            <div class="cebolla-larga">
              <img src="http://drive.google.com/uc?export=view&id=1tSrV3d7cnXd1C4lujQloRhhVAZWfArO4" alt="Cebolla larga">
            </div>
              <div class="precio-larga">
                <p class="negrita">Cebolla Larga x 500 gramos <br> 
                  <p class="precios-larga">$2400</p>
              </div>

            <div class="arveja-verde">
              <img src="http://drive.google.com/uc?export=view&id=1olDElr9IibOvDEnlxXqVXVkSQPIQSc-6" alt="Arveja verde">
            </div>
              <div class="precio-arve">
                <p class="negrita">Arveja Verde x 500 gramos <br> 
                  <p class="precios-arveja">$2400</p>
              </div>

            <div class="ahuyama">
              <img src="http://drive.google.com/uc?export=view&id=1hFUTphsA-nV6ZYyiwa_hJwnsiIHXizCk" alt="Ahuyama">
            </div>
              <div class="precio-ahuya">
                <p class="negrita">Ahuyama x 500 gramos <br> 
                  <p class="precios-ahuyama">$1300</p>
              </div>

            <div class="brocoli">
              <img src="http://drive.google.com/uc?export=view&id=1T7hvEsQEVwCt3s7YyytfA6dnpVkw_aso" alt="Brócoli">
            </div>
              <div class="precio-broco">
                <p class="negrita">Brócoli x 500 gramos <br> 
                  <p class="precios-brocoli">$3500</p>
              </div>
          </section>
      </main>
      <!--Fin de las imagenes e información-->

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