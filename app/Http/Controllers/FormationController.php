<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of all formations.
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){    
            $formations = Formation::paginate(10);

            return view('formation.index', compact('formations'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new formations.
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('formation.create');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created formation in the database.
     */
    public function store(FormationRequest $request)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            Formation::create($request->validated());

            return redirect()->route('formations.index')->with('success', 'Formation created successfully');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Shows the edit form for an specific formation
     */
    public function edit(Formation $formation)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('formation.edit', compact('formation'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Updates the formation from the edit form
     */
    public function update(FormationRequest $request, Formation $formation)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $formation->update($request->validated());

            return redirect()->route('formations.edit', $formation)->with('success', 'Formation updated successfully');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified formation from storage.
     */
    public function destroy(Formation $formation)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $formation->delete();

            return redirect()->route('formations.index')->with('success', 'Formation deleted successfully');
        }
        else{
            return redirect()->route('login');
        }
    }
}
