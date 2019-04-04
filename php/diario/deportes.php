<?php
$noticias = [
 ["Deportes" , "Maradona tiene un nuevo hijo"],
 ["Politica" , "Macri se tropezó en un acto"],
 ["Deportes" , "Accidente fatal en el Rally"],
 ["Politica" , "Cambios en una legislación clave"],
 ["Politica" , "Nuevo Código Penal"],
 ["Espectaculos" , "Paul McCartney sonó muy bajo y vuelve la polémica"],
 ["Deportes" , "Una crucial reunión puede cambiar el presente de la Fórmula 1"],
 ["Deportes" , "Fuerte autocrítica de Biglia por la última actuación en el Mundial de Rusia"],
 ["Sociedad" , "La delgada línea entre romántico y controlador"],
 ["Sociedad" , "Cómo saber cuándo es el momento de decirle adiós a tu mascota"]
];

$rubros[];
foreach ($noticias as $noticia) {
  $rubros[] = $noticia[0];
}

?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diario Pepito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">DIARIO PEPITO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

          <?php foreach ($noticias as $noticia) {
            $rubros[] = $noticia[0];
          }
           ?>

            <li class="nav-item active">
              <a class="nav-link" href="#">Deportes <span class="sr-only">(current)</span></a>
            </li>

          </ul>
        </div>
      </nav>
    </header>

  <div class"container">

    <div class="card-columns">

    <?php foreach ($noticias as $key => $value) {
      echo '<div class="card">
              <div class="card-header">
                '.$value[0].'
              </div>
              <div class="card-body">
                <p class="card-text">'.$value[1].'</p>
              </div>
            </div>';

    } ?>

    </div>
  </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
