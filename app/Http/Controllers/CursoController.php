<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos=Curso::paginate();
        $cursos=Curso::orderBy('id','desc')->paginate();
        //return $cursos;
        //$cursos=Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        //return $request;
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save();
        //return $curso;
        return redirect()->route('cursos.show', $curso);
    }

    public function show($id){
        $curso=Curso::find($id);
        //return $curso;
        /* compact()-> compact is only useful if the sending variable is called the same as the variable received in data */
        return view('cursos.show', compact('curso'));
        /*return view('cursos.show', ['curso' => $curso]);*/
    }

    /*public function edit($id){
        $curso=Curso::find($id);
        return $curso;
    }*/


    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request,Curso $curso){
        //return $request->all();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);

        //return $curso;
    }

}