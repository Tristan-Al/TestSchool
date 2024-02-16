<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class ProfesorsController extends Controller
{

    // WARNING: I HAD TO ADD A FILLABLE TABLE IN THE TEACHERS MODEL TO BE ABLE TO STORE THE TEACHERS IN THE DATABASE!

     /**
     * Display a listing of all teachers.
     *
     * @return \Illuminate\View\View
     */

    public function index(){
        $profesors = Profesor::all();
        return view('teachers', compact('profesors'));
    }
    
   /**
     * Show the form for creating a new teacher.
     *
     * @return \Illuminate\View\View
     */

    public function create(){
        return view('add.add_profesores');
    }

    /**
     * Store a newly created teacher in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request){
    Profesor::create([
        'nombre' => $request->nombre,
        'usuarioSeneca' => $request->senecaUser,
        'apellido1' => $request->apellido1,
        'apellido2' => $request->apellido2,
        'especialidad' => $request->especialidad,
    ]);

    return redirect()->route('teachers.index')->with('success', 'Profesor agregado correctamente.');
}


/**
 * Shows the edit form for an specific teacher
 * @param int $id of the teacher
 * @return view returns a view for the edit form
 */

 public function edit_teacher($id){
    //get an specific teacher by its id
    $teacher = DB::table('profesors')->where('id', $id)->first();
    return view('edit.edit_teacher', ['teacher' => $teacher]);
 }
    
 /**
 * Updates the teacher from the edit form
 * @param int $id of the teacher
 * @param Request 
 * @return view returns a view of the list of teachers
 */

    public function update_teacher(Request $request, $id)
    {

        $teacher = Profesor::findOrFail($id);

        $teacher->update([
            'usuarioSeneca' => $request->input('usuarioSeneca'),
            'nombre' => $request->input('nombre'),
            'apellido1' => $request->input('apellido1'),
            'apellido2' => $request->input('apellido2'),
            'especialidad' => $request->input('especialidad'),
        ]);

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');

    } 

    public function delete_teacher($id){
        $teacher = Profesor::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }

}


