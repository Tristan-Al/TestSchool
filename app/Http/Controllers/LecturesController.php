<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lecture;

class LecturesController extends Controller
{

    // WARNING: I HAD TO ADD A FILLABLE TABLE IN THE TEACHERS MODEL TO BE ABLE TO STORE THE TEACHERS IN THE DATABASE!

    /**
     * Display a listing of all teachers.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $lectures = Lecture::all();
        return view('lectures', compact('lectures'));
    }

    /**
     * Show the form for creating a new teacher.
     *
     * @return \Illuminate\View\View
     */

    public function create()
    {
        return view('add.add_lectures');
    }

    /**
     * Store a newly created teacher in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        Lecture::create([
            'id' => $request->id,
            'group_id' => $request->group_id,
            'subject_id' => $request->subject_id,
            'professor_id' => $request->professor_id,
            'hours' => $request->hours
        ]);

        return redirect()->route('lectures.index')->with('success', 'Lecture agregado correctamente.');
    }


    /**
     * Shows the edit form for an specific teacher
     * @param int $id of the teacher
     * @return view returns a view for the edit form
     */

    public function edit_lecture($id)
    {
        //get an specific teacher by its id
        $lecture = DB::table('lectures')->where('id', $id)->first();
        return view('edit.edit_lecture', ['lecture' => $lecture]);
    }

    /**
     * Updates the teacher from the edit form
     * @param int $id of the teacher
     * @param Request 
     * @return view returns a view of the list of teachers
     */

    public function update_lecture(Request $request, $id)
    {

        $lecture = Lecture::findOrFail($id);

        $lecture->update([
            'id' => $request->input('id'),
            'group_id' => $request->input('group_id'),
            'subject_id' => $request->input('subject_id'),
            'professor_id' => $request->input('professor_id'),
            'hours' => $request->input('hours')
        ]);

        return redirect()->route('lectures.index')->with('success', 'Lecture updated successfully');

    }

    public function delete_lecture($id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->delete();
        return redirect()->route('lectures.index')->with('success', 'Lecture deleted successfully');
    }

}