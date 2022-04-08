<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
	@@ -13,33 +15,11 @@
|
*/

Route::get('/', HomeController::class);
Route::resource('cursos', CursoController::class);
/* names() -> rename the routes | parameters() -> rename the variables
 Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); */

/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');
    categoria? se deja con el signo porque es opcional, y se debe dejar null
    Route::get('cursos/{id}','show')->name('cursos.show');
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
    //Route::get('cursos/{curso}/{categoria?}','show');
});*/


 