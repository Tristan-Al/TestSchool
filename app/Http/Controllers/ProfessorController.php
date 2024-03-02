<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of all professor.
     */
    public function index()
    {
        $professors = Professor::paginate(10);

        return view('professor.index', compact('professors'));
    }

    /**
     * Show the form for creating a new professor.
     */
    public function create()
    {
        return view('professor.create');
    }

    /**
     * Store a newly created professor in the database.
     */
    public function store(ProfessorRequest $request)
    {
        Professor::create($request->validated());

        return redirect()->route('professors.index')->with('success', 'Professor created successfully');
    }


    /**
     * Shows the edit form for an specific professor
     */
    public function edit(Professor $professor)
    {
        return view('professor.edit', compact('professor'));
    }

    /**
     * Updates the professor from the edit form
     */
    public function update(ProfessorRequest $request, Professor $professor)
    {
        $professor->update($request->validated());

        return redirect()->route('professors.edit', $professor)->with('success', 'Professor updated successfully');
    }

    /**
     * Remove the specified professor from storage.
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professors.index')->with('success', 'Professor deleted successfully');
    }
}
