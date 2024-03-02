<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureRequest;
use App\Models\Lecture;

class LectureController extends Controller
{
    /**
     * Display a listing of all lectures.
     */
    public function index()
    {
        $lectures = Lecture::paginate(10);

        return view('lecture.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new lecture.
     */
    public function create()
    {
        return view('lecture.create');
    }

    /**
     * Store a newly created lecture in the database.
     */
    public function store(LectureRequest $request)
    {
        Lecture::create($request->validated());

        return redirect()->route('lectures.index')->with('success', 'Lecture created successfully');
    }


    /**
     * Shows the edit form for an specific lecture
     */
    public function edit(Lecture $lecture)
    {
        return view('lecture.edit', compact('lecture'));
    }

    /**
     * Updates the lecture from the edit form
     */
    public function update(LectureRequest $request, Lecture $lecture)
    {
        $lecture->update($request->validated());

        return redirect()->route('lectures.edit', $lecture)->with('success', 'Lecture updated successfully');
    }

    /**
     * Remove the specified lecture from storage.
     */
    public function destroy(Lecture $lecture)
    {
        $lecture->delete();

        return redirect()->route('lectures.index')->with('success', 'Lecture deleted successfully');
    }
}
