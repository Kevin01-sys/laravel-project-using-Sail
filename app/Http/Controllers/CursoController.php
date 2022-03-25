<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        /* compact()-> compact is only useful if the sending variable is called the same as the variable received in data */
        return view('cursos.show', compact('curso'));
        /*return view('cursos.show', ['curso' => $curso]);*/
    }

}