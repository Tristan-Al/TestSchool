<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Group;

class GroupsController extends Controller
{

    // WARNING: I HAD TO ADD A FILLABLE TABLE IN THE TEACHERS MODEL TO BE ABLE TO STORE THE TEACHERS IN THE DATABASE!

    /**
     * Display a listing of all teachers.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $groups = Group::all();
        return view('groups', compact('groups'));
    }

    /**
     * Show the form for creating a new teacher.
     *
     * @return \Illuminate\View\View
     */

    public function create()
    {
        return view('add.add_groups');
    }

    /**
     * Store a newly created teacher in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        Group::create([
            'id' => $request->id,
            'schoolYear' => $request->schoolYear,
            'formation_id' => $request->formation_id,
            'year' => $request->year,
            'denomination' => $request->denomination,
            'shift' => $request->shift
        ]);

        return redirect()->route('groups.index')->with('success', 'Grupo agregado correctamente.');
    }


    /**
     * Shows the edit form for an specific teacher
     * @param int $id of the teacher
     * @return view returns a view for the edit form
     */

    public function edit_group($id)
    {
        //get an specific teacher by its id
        $group = DB::table('groups')->where('id', $id)->first();
        return view('edit.edit_group', ['group' => $group]);
    }

    /**
     * Updates the teacher from the edit form
     * @param int $id of the teacher
     * @param Request 
     * @return view returns a view of the list of teachers
     */

    public function update_group(Request $request, $id)
    {

        $group = Group::findOrFail($id);

        $group->update([
            'id' => $request->input('id'),
            'schoolYear' => $request->input('schoolYear'),
            'formation_id' => $request->input('formation_id'),
            'year' => $request->input('year'),
            'denomination' => $request->input('denomination'),
            'shift' => $request->input('shift'),
        ]);

        return redirect()->route('groups.index')->with('success', 'Group updated successfully');

    }

    public function delete_group($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->route('groups.index')->with('success', 'Group deleted successfully');
    }

}