<?php

use Illuminate\Support\Facades\Route;
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

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos/index','index');
    Route::get('cursos/create','create');
    //cursos/jefer
    Route::get('cursos/{curso}','show');
    Route::get('cursos/{curso}','show');
});


// Route::get('/', function () {
//     // return view('welcome');
//     return "Jefer";
// });



// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
//     return "Laravel cursos: $curso, de la categoria: $categoria";
// });


// //variable opcional
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
//     if($categoria){
//         return "Laravel cursos: $curso, de la categoria: $categoria";
//     }else{
//         return "Laravel cursos: $curso";
//     }
   
// });


