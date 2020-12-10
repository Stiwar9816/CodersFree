<?php

use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
// Si se quiere cambiar la URL en este caso por "Asignaturas".
// en este caso parameters se usa para evitar que "asignaturas" no sea el nombre de esas variables y evitar cambiarlas en cada archivo.
// el parametro "names" se usa para evitar que los metodos del controlador cambien. 

// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

// Tener en cuenta el orden cuando las rutas lleven variables y cuando no para que sean leidas correctamente
// Al poner el Signo "?" en la variable de la ruta indica que ese valor es opcional
// Ademas tenemos que inicializar la variable en la función anonima como null

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

//     if ($categoria) {
//         return "Bienvenido al curso $curso de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso $curso";
//     }
    
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
