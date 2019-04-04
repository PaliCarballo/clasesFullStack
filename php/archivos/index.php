<?php
  $title = "Digital Movies - Tus películas favoritas";
  $tituloPrincipal = "Películas del mundo";
  $logo = "images/logo.png";
  $tituloSecundario = "Películas Disponibles";
  $logueado = true;
  $duracion = 120;
  $stars = str_repeat('<img class="ranking" src="images/star.png" alt="">', 5);
  $meGusta = true;
  $fechaDeEstreno = 2002 ;
  $anteojos = false;
  $rating = 5;
?>

    <?php include("header.php"); ?>

    <?php echo "<h1 class='centrar'>$tituloPrincipal</h1>" ?>


    <div id="redes">
      <ul>
        <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
        <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
        <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
        <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
      </ul>
    </div>

    <div>
      <ul>
        <li><a href="listarPelis.html">Acción</a></li>
        <li><a href="listarPelis.html">Comedia</a></li>
        <li><a href="listarPelis.html">Terror</a></li>
        <li><a href="listarPelis.html">Aventura</a></li>
        <li><a href="listarPelis.html">Romance</a></li>
        <li><a href="listarPelis.html">Triller</a></li>
        <li><a href="#">Iniciar Sesión</a></li>
        <li><a href="#">Iniciar Sesión</a></li>
        <li><a href="#">Registrarme</a></li>
      </ul>
    </div>

      <?php echo "<h2>$tituloSecundario</h2>" ?>


    <div class="contenedor-pelis">
      <div class="items">
        <img class="poster" src="images/avatar.jpg" alt="">
        <div class="detalle">
          <label>Avatar <?php echo $fechaDeEstreno ?> </label>
          <label>Acción</label>
          <label>
            Duración:
            <?php echo ($duracion / 60) ?>
             horas</label>
          <label>Rating: <?php echo $rating ?></label>

          <label>
            <?php echo $stars; ?>
          </label>

            <label>
              <?php
                if ($meGusta)
                  { ?>
                    <img class="ranking" src="images/thumb-up-icon.png" alt="">
                    <?php
                  } else
                    { ?>
                      <img class="ranking" src="images/thumb-down-icon.png" alt="">
                      <?php
                    }?>
            </label>

           <?php if ($fechaDeEstreno > 2019) 
                { ?>
                  <img class="estreno" src="images/estreno3.png" alt=""> <?php       
                }    
           ?>
           
           <!--
            SI RATING ESTA ENTRE 1 Y 5
             if ($rating > 1 && $rating < 5) { 
                   ES VISIBLE display: block; 
            }  -->
            
            
            <img class="taquillera" src="images/ticket.png" alt="">
            
            
            <?php 
                if ($anteojos) 
                  { ?>
                    <img class="tresd" src="images/anteojos-3d.png" alt="">
                    <?php 
                  } else
                    { ?>
                      <img class="tresd" src="images/lentes3d.png" alt="">
                      <?php 
                    }?>
            
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/avengers.jpg" alt="">
        <div class="detalle">
          <label>Avengers (May 2018)</label>
          <label>Acción</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/moana.jpg" alt="">
        <div class="detalle">
          <label>Moana (Mar 2016)</label>
          <label>Animadas</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/rogueone.jpg" alt="">
        <div class="detalle">
          <label>Rogue One (Dic 2017)</label>
          <label>Acción</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/titanic.jpg" alt="">
        <div class="detalle">
          <label>Titanic (Abr 1995)</label>
          <label>Romance</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/dragonball.jpg" alt="">
        <div class="detalle">
          <label>Drangon Ball Z (Jul 2005)</label>
          <label>Animada</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/emoji.jpg" alt="">
        <div class="detalle">
          <label>Emoji (Oct 2016)</label>
          <label>Animada</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

    </div>



    <?php include("footer.php"); ?>
