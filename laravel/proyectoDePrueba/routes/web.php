<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/peliculas/{titulo}', function($titulo){
    if(iset($titulo){
        return view()
    }
});



  // RUTAS CON PARAMETROS
  Route::get('home/{name}', function($name){
    return 'Hello' . $name;
  })
  // RUTAS CON PARAMETROS OPCIONALES -> El ? dsp de la variable indica q es opcional, podemos ponerle un valor por defecto
  Route::get('post/{comment_id?'}, function($comment_id = null){
    if ($comment_id === null){
      return 'No hay comentarios';
    } else {
      return $comment_id;
    }
  })



Route::get('/peliculas', function(){
    echo '<!DOCTYPE html>
    <html lang="es" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" href="/css/styles.css">
        </head>';
    
    '<h1>Listado de peliculas</h1>';

    $peliculas = [  
        ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
        ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],  
        ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],  
        ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],  
        ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],  
        ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],  
        ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],  
        ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],  
        ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],  
        ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'], 
    ];

    foreach ($peliculas as $pelicula){
        echo '<div class="pelicula"><li>'.'Título: <a href="/peliculas/'.$pelicula['title'].'">'.$pelicula['title'].'<br>
        Género: '.$pelicula['genre'].'</li>'.'<br>
        <img src='.$pelicula['poster'].'></div>';
    };
});

Route::get('/peliculas/{titulo}', function($titulo){
    echo '<!DOCTYPE html>
    <html lang="es" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" href="/css/styles.css">
        </head>';
    
    '<h1>Listado de peliculas</h1>';

    $peliculas = [  
        ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
        ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],  
        ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],  
        ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],  
        ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],  
        ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],  
        ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],  
        ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],  
        ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],  
        ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'], 
    ];

    foreach($peliculas as $pelicula){
        if($pelicula['title'] == $titulo){
            
            return '<div class="pelicula"><li>'.'Título: '.$pelicula['title'].'<br>
        Género: '.$pelicula['genre'].'</li>'.'<br>
        <img src="/'.$pelicula['poster'].'"></div>';
        }
    }
    return 'La peli no existe';

});

Route::get('/hola', function(){
    echo 'Holuuuuuuuuu, tengo sueño';
});

Route::get('/', function () {
    return view('welcome');
});
