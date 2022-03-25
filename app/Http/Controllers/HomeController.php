<?php
# php artisan make:controller HomeController -> this command was used to create this file.
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return "Bienvenido a la página principal ";
    }
}