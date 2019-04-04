<?php
  $logueado = true;
?>


<div id="piePagina">
      <ul>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="galeria.html">Galeria</a></li>

        <?php
          if($logueado)
          { ?>
             <li><a href="perfil.html">Mi Perfil</a></li>
          <?php
          } else
          { ?>
              <li><a href="registro.html">Registrate</a></li>
              <li><a href="login.html">Login</a></li>
            <?php
          } ?>



      </ul>
    </div>


  </div>
  </body>
</html>