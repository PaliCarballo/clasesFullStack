<?php 
Que hago en la consola para que funcione LARAVEL cuando me descargo un archivo?
1) clono o pulleo el archivo de git (pero no me baja la carpeta vendor ni el archivo .env)
2) Duplico el archivo .env.example y lo renombro como .env
3) En la consola -> composer update (me actualiza los archivos que no tengo)
4) php artisan key:generate
5) php artisan serve (se desactiva con ctr C)
  
  
6) PARA CORRER LAS MIGRACIONES QUE CAMBIE O CREE en laravel
   php artisan migrate



LARAVEL
1) en consola-> composer create-project laravel/laravel nombreDeMiProyecto
2) si el archivo .env no está copiamos y pegamos .env.example y lo ponemos .env
3.a) en consola -> php artisan key:generate 
3.b) en cosola creo la migracion de la DB -> php artisan make:migration nombre_de_la_migracion 
    se crean en database/migrations

    modifico el archivo .env 
    DB_DATABASE = Pongo el nombre de mi DB
    DB_USERNAME = root
    DB_PASSWORD = root
    en consola -> php artisan migrate
4) Si ya descargué todo, cierro la consola y la vuelvo a abrir dentro de mi proyecto
  consola -> php artisan serve //inicio el servidor para poder ver mi proyecto onilne, se apaga con ctr C
4) en atom defino las rutas / controlador@metodo / vistas (MVC)

  // RUTAS -> las defino dentro del archivo routes/web.php
  Route::get('/nombreDeLaRuta', 'NombreDelControlador@nombreDelMetodo');

  Ej: // por get va lo q se muestra normal, cuando el usuario envia datos tiene que ir por post
  Route::get('/movies', 'MovieController@index'); // get -> consulta elementos de la DB (lista)
  Route::get('movies/{id}', 'MovieController@show'); // get -> consulta elementos de la DB (item)
  Route::post('/movies', 'MovieController@store'); // post -> crea elementos en la DB (alta)
  Route::patch('/movies/{id}', 'MovieController@update'); // or Route::put modifica elementos de la DB (modificación)
  Route::delete('/movies/{id}', 'MovieController@destroy'); // elimina elementos de la DB (baja)

  COMPLETAR CON SLIDES ELEARNING LARAVEL MVC 
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
  
  // CONTROLLER, MODEL & METODOS -> los creo primero en consola y luego los utilizo en atom
  php artisan make:controller NombreDelController o
  php artisan make:model NombreDelModel

  los METODOS son definidos dentro del CONTROLLER o MODEL como una 
    public function nombreDelMetodo(){
      return view('nombreDeLaVista'); // es un archivo .blade.php que esta dentro de views
    }

  la diferencia es que el CONTROLLER me devuelve un metodo
  en cambio un MODEL solo consulta cosas de la DB  

  el CONTROLLER usa un MODEL dentro de la public function -> 
    $movies = \App\Movie::all(); // busca todas las pelis
    $movies = \App\Movie::find(1); // busco una peli por ID
    $movies = \App\Movie::first(); // busco primer resultado
    $movies = \App\Movie::last(); // busco ultimo resultado
    $movies = \App\Movie::where('title', 'Intesamente')->get(); // busco pelis por title
    $movies = \App\Movie::where('rating', '>', '8')->get(); // busco pelis por rating > a 8
    $movies = \App\Movie::where('title', 'LIKE', 'Matrix%')
      ->where('release_date', '<=', new DateTime('2001-02-08'))
      ->orWhere('rating', '>', '4')
      ->orderBy('rating', 'DESC')
      ->take(5) // toma los 5 primeros
      ->get(); // obtenemos el resultado


    $variable = \App\NombreModel::where('nombreDeLaColumnaQueQuieroDatos', '=', $variable)->first(); //me trae un solo dato como el fetch,si tengo solo dos parametros no hace falta poner el igual
    $variable = \App\NombreClass::all('nombreDeLaTabla')->get(); // cuando hay get y ::all es como un fetchAll, me trae todos los datos
  
  // VISTA -> las creo dentro de resources/views/creoUnArchivo.blade.php
  tambien la defino adentro de la 
  public function {
    return view('');
  }
    

5) SI CREE MAL LOS NOMBRES DE LAS CLASES, las renombro a mano
para que laravel las acepte en consola escribo este comando:
  composer dump-autoload




//-----------------------------------------------  
VALIDACIONES EN LARAVEL en el archivo Controller
  public function save(Request, $request) {
    $this->validate($request, [
      'name' => 'required|ubique:genres' //genres iria en lugar del nombre de mi tabla
      ],
      [
        'name.required' => 'El campo de tipo name es Obligatorio'
      ]);
  
  Para persistir los datos dentro del form, en el value del input pongo ->
    value="{{ old('name') }}" //persiste el campo name
