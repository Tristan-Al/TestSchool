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

        return view('edits.edit_modulo', ['modulo'=>$modulo]);
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
}
