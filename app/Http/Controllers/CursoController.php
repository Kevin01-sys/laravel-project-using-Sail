<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos=Curso::orderBy('id','desc')->paginate();
        //$cursos=Curso::paginate();
        //$cursos=Curso::all();
        //return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        /*$request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required',
        ]);*/
        
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

    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request,Curso $curso){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

}