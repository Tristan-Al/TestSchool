<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Profesor;

class EditController extends BaseController
{
    public function profesor(int $id){
        $profesor = Profesor::whereId($id)->first();

        return view('edits.edit_profesor', ['profesor'=>$profesor]);
    }

    public function formacion(int $id){
        $formacion = Formacion::whereId($id)->first();

        return view('edits.edit_formacion', ['formacion'=>$formacion]);
    }

    public function modulo(int $id){
        $modulo = Modulo::whereId($id)->first();
        $formaciones = Formacion::all();

        return view('edits.edit_modulo', ['modulo'=>$modulo, 'formaciones'=>$formaciones]);
    }

    public function grupo(int $id){
        $grupo = Grupo::whereId($id)->first();
        $formaciones = Formacion::all();

        return view('edits.edit_grupo', ['grupo'=>$grupo, 'formaciones'=>$formaciones]);
    }
    

    public function leccion(int $id){
        $leccion = Leccion::whereId($id)->first();
        $modulos = Modulo::all();
        $grupos = Grupo::all();
        $profesores = Profesor::all();

        return view('edits.edit_leccion', ['leccion'=>$leccion, 'modulos'=>$modulos, 'grupos'=>$grupos, 'profesores'=>$profesores]);
    }
    
    public function confirmEditProfesor(Request $request){
        $profesor = Profesor::find($request->input('id'));

        if (!empty($request->input('usuarioSeneca'))){
            $profesor->usuarioSeneca = $request->input('usuarioSeneca');
        }
        if (!empty($request->input('nombre'))){
            $profesor->nombre = $request->input('nombre');
        }
        if (!empty($request->input('apellido1'))){
            $profesor->apellido1 = $request->input('apellido1');
        }
        if (!empty($request->input('apellido2'))){
            $profesor->apellido2 = $request->input('apellido2');
        }
        if (!empty($request->input('especialidad'))){
            $profesor->especialidad = $request->input('especialidad');
        }

        $profesor->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditFormacion(Request $request){
        $formacion = Formacion::find($request->input('id'));

        if (!empty($request->input('denominacion'))){
            $formacion->denominacion = $request->input('denominacion');
        }
        if (!empty($request->input('siglas'))){
            $formacion->siglas = $request->input('siglas');
        }

        $formacion->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditModulo(Request $request){
        $modulo = Modulo::find($request->input('id'));

        if (!empty($request->input('formacion_id'))){
            $modulo->formacion_id = $request->input('formacion_id');
        }
        if (!empty($request->input('denominacion'))){
            $modulo->denominacion = $request->input('denominacion');
        }
        if (!empty($request->input('siglas'))){
            $modulo->siglas = $request->input('siglas');
        }
        if (!empty($request->input('curso'))){
            $modulo->curso = $request->input('curso');
        }
        if (!empty($request->input('horas'))){
            $modulo->horas = $request->input('horas');
        }
        if (!empty($request->input('especialidad'))){
            $modulo->especialidad = $request->input('especialidad');
        }

        $modulo->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditGrupo(Request $request){
        $grupo = Grupo::find($request->input('id'));

        if (!empty($request->input('cursoEscolar'))){
            $grupo->cursoEscolar = $request->input('cursoEscolar');
        }
        if (!empty($request->input('formacion_id'))){
            $grupo->formacion_id = $request->input('formacion_id');
        }
        if (!empty($request->input('curso'))){
            $grupo->curso = $request->input('curso');
        }
        if (!empty($request->input('denominacion'))){
            $grupo->denominacion = $request->input('denominacion');
        }
        if (!empty($request->input('turno'))){
            $grupo->especialidad = $request->input('turno');
        }
        if (!empty($request->input('horas'))){
            $modulo->horas = $request->input('horas');
        }

        $grupo->save();

        return redirect()->route('dashboard');
    } 

    public function confirmEditLeccion(Request $request){
        $leccion = Leccion::find($request->input('id'));

        if (!empty($request->input('grupo_id'))){
            $leccion->grupo_id = $request->input('grupo_id');
        }
        if (!empty($request->input('modulo_id'))){
            $leccion->modulo_id = $request->input('modulo_id');
        }
        if (!empty($request->input('profesor_id'))){
            $leccion->profesor_id = $request->input('profesor_id');
        }
        if (!empty($request->input('horas'))){
            $leccion->horas = $request->input('horas');
        }

        $grupo->save();

        return redirect()->route('dashboard');
    } 
}
