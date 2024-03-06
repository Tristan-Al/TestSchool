<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Lecture;

class LectureController extends Controller
{
    /**
     * Display a listing of all lectures.
     */
    public function index()
    {
        if (Auth::check() && (Auth::user()->hasRole('registered_user') || Auth::user()->hasRole('admin'))) {
            $lectures = Lecture::search(request('search'))->query(function ($query) {
                $query->join('groups', 'lectures.group_id', '=', 'groups.id')
                    ->join('subjects', 'lectures.subject_id', '=', 'subjects.id')
                    ->join('professors', 'lectures.professor_id', '=', 'professors.id')
                    ->select(
                        'lectures.*',
                        'groups.denomination AS group_denomination',
                        'subjects.acronym AS subject_acronym'
                    );
            })->paginate(10);

            return view('lecture.index', compact('lectures'));
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new lecture.
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return view('lecture.create');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created lecture in the database.
     */
    public function store(LectureRequest $request)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            Lecture::create($request->validated());

            return redirect()->route('lectures.index')->with('success', 'Lecture created successfully');
        } else {
            return redirect()->route('login');
        }
    }


    /**
     * Shows the edit form for an specific lecture
     */
    public function edit(Lecture $lecture)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return view('lecture.edit', compact('lecture'));
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Updates the lecture from the edit form
     */
    public function update(LectureRequest $request, Lecture $lecture)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            $lecture->update($request->validated());

            return redirect()->route('lectures.edit', $lecture)->with('success', 'Lecture updated successfully');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified lecture from storage.
     */
    public function destroy(Lecture $lecture)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            $lecture->delete();

            return redirect()->route('lectures.index')->with('success', 'Lecture deleted successfully');
        } else {
            return redirect()->route('login');
        }
    }
}
