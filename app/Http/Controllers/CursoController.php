<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos=Curso::paginate();
        //return $cursos;
        //$cursos=Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        $curso=Curso::find($id);
        //return $curso;
        /* compact()-> compact is only useful if the sending variable is called the same as the variable received in data */
        return view('cursos.show', compact('curso'));
        /*return view('cursos.show', ['curso' => $curso]);*/
    }

}