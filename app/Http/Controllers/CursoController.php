<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{

    public function  index(){
        $cursos = Curso::OrderBy('id','desc')->paginate();
       
        return view('cursos.index', compact('cursos'));
    }


    public function create(){
        return view('cursos.create');
    }    


    public function store(Request $request){
        $request -> validate([
            'nombre' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $curso = new Curso();
        $curso->nombre =$request->nombre;
        $curso->descripcion =$request->description;
        $curso->categoria =$request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }



    public function show($id){
        $curso = Curso::find($id);
        return view('cursos.show', ['curso'=> $curso]);
    }


    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }


    public function update(Request $request ,Curso $curso){

        $request -> validate([
            'nombre' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }

}
