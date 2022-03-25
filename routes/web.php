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

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    /* categoria? se deja con el signo porque es opcional, y se debe dejar null*/
    Route::get('cursos/{curso}/{categoria?}','show');
});
