<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la página principal ";
    }

    public function create(){
        return "En esta página podrás crear un curso";
    }

    public function show($curso, $categoria = null){
        if ($categoria){
            return "Bienvenido al curso $curso, de la categoría $categoria";
        } else 
        {
            return "Bienvenido al curso: $curso";
        }
    }
}