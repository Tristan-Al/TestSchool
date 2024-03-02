<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of all formations.
     */
    public function index()
    {
        $formations = Formation::paginate(10);

        return view('formation.index', compact('formations'));
    }

    /**
     * Show the form for creating a new formations.
     */
    public function create()
    {
        return view('formation.create');
    }

    /**
     * Store a newly created formation in the database.
     */
    public function store(FormationRequest $request)
    {
        Formation::create($request->validated());

        return redirect()->route('formations.index')->with('success', 'Formation created successfully');
    }

    /**
     * Shows the edit form for an specific formation
     */
    public function edit(Formation $formation)
    {
        return view('formation.edit', compact('formation'));
    }

    /**
     * Updates the formation from the edit form
     */
    public function update(FormationRequest $request, Formation $formation)
    {
        $formation->update($request->validated());

        return redirect()->route('formations.edit', $formation)->with('success', 'Formation updated successfully');
    }

    /**
     * Remove the specified formation from storage.
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();

        return redirect()->route('formations.index')->with('success', 'Formation deleted successfully');
    }
}
