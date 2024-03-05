<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of all professor.
     */
    public function index()
    {
        if(Auth::check() && (Auth::user()->hasRole('registered_user') || Auth::user()->hasRole('admin'))){
            //$professors = Professor::paginate(10);

            $professors = Professor::search(request('search'))->paginate(10);

            return view('professor.index', compact('professors'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new professor.
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('professor.create');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created professor in the database.
     */
    public function store(ProfessorRequest $request)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            Professor::create($request->validated());

            return redirect()->route('professors.index')->with('success', 'Professor created successfully');
        }
        else{
            return redirect()->route('login');
        }
    }


    /**
     * Shows the edit form for an specific professor
     */
    public function edit(Professor $professor)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('professor.edit', compact('professor'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Updates the professor from the edit form
     */
    public function update(ProfessorRequest $request, Professor $professor)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $professor->update($request->validated());

            return redirect()->route('professors.edit', $professor)->with('success', 'Professor updated successfully');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified professor from storage.
     */
    public function destroy(Professor $professor)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $professor->delete();

            return redirect()->route('professors.index')->with('success', 'Professor deleted successfully');
        }
        else{
            return redirect()->route('login');
        }
    }
}
