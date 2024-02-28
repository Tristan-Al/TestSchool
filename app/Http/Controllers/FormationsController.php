<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Formation;

class FormationsController extends Controller
{

    // WARNING: I HAD TO ADD A FILLABLE TABLE IN THE TEACHERS MODEL TO BE ABLE TO STORE THE TEACHERS IN THE DATABASE!

    /**
     * Display a listing of all teachers.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $formations = Formation::all();
        return view('formations', compact('formations'));
    }

    /**
     * Show the form for creating a new teacher.
     *
     * @return \Illuminate\View\View
     */

    public function create()
    {
        if(Entrust::hasRole('admin')){
            return view('add.add_formations');
        }
        return view('dashboard'); // If the user is not logged in, it is redirected to the dashboard.
    }

    /**
     * Store a newly created teacher in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        if(Entrust::hasRole('admin')){
            Formation::create([
                'id' => $request->id,
                'denomination' => $request->denomination,
                'acronym' => $request->acronym
            ]);

            return redirect()->route('formations.index')->with('success', 'Formation agregado correctamente.');
        }
        return view('dashboard'); // If the user is not logged in, it is redirected to the dashboard.
    }


    /**
     * Shows the edit form for an specific teacher
     * @param int $id of the teacher
     * @return view returns a view for the edit form
     */

    public function edit_formation($id)
    {
        //get an specific teacher by its id
        $formation = DB::table('formations')->where('id', $id)->first();
        return view('edit.edit_formation', ['formation' => $formation]);
    }

    /**
     * Updates the teacher from the edit form
     * @param int $id of the teacher
     * @param Request 
     * @return view returns a view of the list of teachers
     */

    public function update_formation(Request $request, $id)
    {

        $formation = Formation::findOrFail($id);

        $formation->update([
            'id' => $request->input('id'),
            'denomination' => $request->input('denomination'),
            'acronym' => $request->input('acronym')
        ]);

        return redirect()->route('formations.index')->with('success', 'Formation updated successfully');

    }

    public function delete_formation($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('formations.index')->with('success', 'Formation deleted successfully');
    }

}