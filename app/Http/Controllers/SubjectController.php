<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of all subjects.
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $subjects = Subject::paginate(10);

            return view('subject.index', compact('subjects'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new subject.
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('subject.create');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created subject in the database.
     */
    public function store(SubjectRequest $request)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            Subject::create($request->validated());

            return redirect()->route('subjects.index')->with('success', 'Subject created successfully');
        }
        else{
            return redirect()->route('login');
        }
    }


    /**
     * Shows the edit form for an specific subject
     */
    public function edit(Subject $subject)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('subject.edit', compact('subject'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Updates the subject from the edit form
     */

    public function update(SubjectRequest $request, Subject $subject)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $subject->update($request->validated());

            return redirect()->route('subjects.edit', $subject)->with('success', 'Subject updated successfully');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified subject from storage.
     */
    public function destroy(Subject $subject)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $subject->delete();

            return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully');
        }
        else{
            return redirect()->route('login');
        }
    }
}
