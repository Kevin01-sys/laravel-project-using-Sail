<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
	@@ -13,33 +15,11 @@
|
*/

Route::get('/', HomeController::class)->name('home');
Route::resource('cursos', CursoController::class);
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('contactanos', function(){
    $correo = new ContactanosMailable;
    Mail::to('test@mailhog.local')->send($correo);
    return "mensaje enviado";
});

 