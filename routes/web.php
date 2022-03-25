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

Route::get('cursos', [CursoController::class,'index']);

Route::get('cursos/create', [CursoController::class,'create']);

// categoria? is left with the sign because it is optional, and should be left null.
Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show']);
