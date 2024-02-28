<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;

class SubjectsController extends Controller
{

    // WARNING: I HAD TO ADD A FILLABLE TABLE IN THE TEACHERS MODEL TO BE ABLE TO STORE THE TEACHERS IN THE DATABASE!

    /**
     * Display a listing of all teachers.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $subjects = Subject::all();
        return view('subjects', compact('subjects'));
    }

    /**
     * Show the form for creating a new teacher.
     *
     * @return \Illuminate\View\View
     */

    public function create()
    {
        return view('add.add_subjects');
    }

    /**
     * Store a newly created teacher in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        Subject::create([
            'id' => $request->id,
            'formation_id' => $request->formation_id,
            'denomination' => $request->denomination,
            'acronym' => $request->acronym,
            'year' => $request->year,
            'speciality' => $request->speciality
        ]);

        return redirect()->route('subjects.index')->with('success', 'Subject agregado correctamente.');
    }


    /**
     * Shows the edit form for an specific teacher
     * @param int $id of the teacher
     * @return view returns a view for the edit form
     */

    public function edit_subject($id)
    {
        //get an specific teacher by its id
        $subject = DB::table('subjects')->where('id', $id)->first();
        return view('edit.edit_subject', ['subject' => $subject]);
    }

    /**
     * Updates the teacher from the edit form
     * @param int $id of the teacher
     * @param Request 
     * @return view returns a view of the list of teachers
     */

    public function update_subject(Request $request, $id)
    {

        $subject = Subject::findOrFail($id);

        $subject->update([
            'id' => $request->input('id'),
            'formation_id' => $request->input('formation_id'),
            'denomination' => $request->input('denomination'),
            'acronym' => $request->inpiut('acronym'),
            'year' => $request->input('year'),
            'speciality' => $request->input('speciality')
        ]);

        return redirect()->route('subject.index')->with('success', 'Subject updated successfully');

    }

    public function delete_subject($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully');
    }

}