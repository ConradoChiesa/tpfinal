<?php

class personajesView
{

  function Mostrar($Titulo, $personajes){

   ?>
<
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Personajes Notables</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
  </head>
  <body>
      <header>
        <h1>Personajes Notables</h1>
      </header>
      <nav>
        <h3 class="eslogan">Héroes y heroínas que están en el corazón.</h3>
          <ul class="barra">
              <li class="item-barra" >
                <a id="inicio" class="link-barra" data-url="htmls/portada.html">Inicio</a>
              </li>
              <li class="item-barra" >
                <a class="link-barra" data-url="htmls/contacto.html">Contacto</a>
              </li>
              <li class="item-barra">
                <a id="tabla" class="link-barra" data-url="htmls/tabla.html">Tabla</a>
              </li>
            </ul>
      </nav>
      <div class="container-float">

      </div>
      <div id="main">
      </div>
      <script type="text/javascript" src="js/principal.js"></script>
  </body>
  <footer>
    Desarrollado por Matías Pocai.
  </footer>
</html>

  <?php
  }
}

 ?>