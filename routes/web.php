<?php

use Illuminate\Support\Facades\Route;
use App\Cliente;

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

//ruta por any
Route::any('contacto1',function(){
    return view('contacto');
});



Route::get('/', function () {
    return view('welcome');
});

//imprimir hola mundo
Route::get('hola-mundo',function(){
    return 'Hola mundo';
});

/* retorna pagina ccontacto
/Route::get('contacto/{nombre}/{edad}',function($nombre,$edad){
    return view('contacto',array(
        'nombre' => $nombre,
        'edad' =>   $edad
    ));
});*/

// retorna nuestra vista de index usuario

Route::get('usuario',function(){
return view('usuarios.index');
});


//ruta uso de etiquetas blade
Route::get('usuario/{edad}',function($edad){
    return view('usuarios.index',compact('edad'));
});

Route::get('mes/{num}',function($num){
    return view('sentencia',compact('num'));
});

// ruta para imprimir un array
Route::get('colores',function(){
    $array [0] = 'negro';
    $array [1] = 'Rojo';
    $array [2] = 'Azul';
    $array [3] = 'Verde';

    return view('colores',compact('array'));

});

// ruta para imprimir un array
Route::get('animales',function(){
   /* $array [0] = 'Gato';
    $array [1] = 'Perro';
    $array [2] = 'Conejo';
    $array [3] = 'Vaca';*/
    $array = [];

    return view('animales',compact('array'));

});

// retorna pagina contacto con controllador
Route::get('contacto/{nombre}/{edad}','ContactoController@index');

// retorna los productos
Route::resource('productos','ProductosController');
