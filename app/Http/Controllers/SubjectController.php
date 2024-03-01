<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of all subjects.
     */
    public function index()
    {
        $subjects = Subject::paginate(10);

        return view('subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new subject.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created subject in the database.
     */
    public function store(SubjectRequest $request)
    {
        Subject::create($request->validated());

        return redirect()->route('subject.index')->with('success', 'Subject created successfully');
    }


    /**
     * Shows the edit form for an specific subject
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

    /**
     * Updates the subject from the edit form
     */

    public function update(SubjectRequest $request, Subject $subject)
    {
        $subject->update($request->validated());

        return redirect()->route('subject.index')->with('success', 'Subject updated successfully');
    }

    /**
     * Remove the specified subject from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subject.index')->with('success', 'Subject deleted successfully');
    }
}
