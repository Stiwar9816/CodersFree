<?php

use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos',  [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');

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