 
LARAVEL
1) en consola-> composer create-project laravel/laravel nombreDeMiProyecto
2) una vez que se descarga todo, cierro la consola y la vuelvo a abrir dentro de mi proyecto
3) en consola -> php artisan serve (inicio el servidor para poder ver mi proyecto onilne, se apaga con ctr C)
4) en atom defino las rutas / controlador@metodo / vistas (MVC)
  en routes/web.php -> Route::get('/nombreDeLaRuta', 'NombreDelControlador@nombreDelMetodo')
  los METODOS son definidos dentro del CONTROLLER como una public function nombreDelMetodo()
  
  yo puedo hacer php artisan make:controller NombreDelController o php artisan make:model NombreDelModel
  la diferencia es que el CONTROLLER me devuelve un metodo, funciones en cambio un MODEL solo consulta cosas de la DB
  el CONTROLLER usa un MODEL dentro de la public function -> 
    $variable = \App\NombreClass::where('nombreDeLaColumnaQueQuieroDatos', '=', $variable)->first(); //me trae un solo dato como el fetch,si tengo solo dos parametros no hace falta poner el igual
    $variable = \App\NombreClass::all('nombreDeLaTabla')->get(); // cuando hay get y ::all es como un fetchAll, me trae todos los datos
  
la VISTA tambien la defino adentro de la public function -> return view('')
    
SI CREE MAL LAS CLASES Y LAS RENOMBRE A MANO en consola hago -> composer dump-autoload
  
Que hago en la consola para que funcione LARAVEL cuando me descargo un archivo?
1) clono o pulleo el archivo de git (pero no me baja la carpeta vendor ni el archivo .env)
2) Duplico el archivo .env.example y lo renombro como .env
3) En la consola -> composer install o composer update (me actualiza losarchivos que no tengo)
4) php artisan key:generate
5) php artisan serve (se desactiva con ctr C)
  
  
PARA CORRER LAS MIGRACIONES QUE CAMBIE O CREE en laravel
  php artisan migrate

  
  
VALIDACIONES EN LARAVEL en el archivo Controller
  public function save(Request, $request) {
    $this->validate($request, [
      'name' => 'required|ubique:genres' //genres iria en lugar del nombre de mi tabla
      ],
      [
        'name.required' => 'El campo de tipo name es Obligatorio'
      ]);
  
  Para persistir los datos dentro del form dentro del value del input pongo ->
    value="{{ old('name') }}" //persiste el campo name
