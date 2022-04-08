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
        /*Here is a way to validate forms without the FormRequest class
        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required',
        ]);*/

        /*create()->creates an instance of the class Course and adds the properties "name",
         "description" and "category" to it, all of which will be stored in the variable $course and saves the record in the database.*/
        /*$curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();*/
        //return $curso;
        
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function show($curso){
        $curso=Curso::find($curso);
        //return $curso;
        /* compact()-> compact is only useful if the sending variable is called the same as the variable received in data */
        return view('cursos.show', compact('curso'));
        /*return view('cursos.show', ['curso' => $curso]);*/
    }

    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCurso $request,Curso $curso){

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }

}