<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of all groups.
     */
    public function index()
    {
        $groups = Group::paginate(10);

        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new group.
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('group.create');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created group in the database.
     */
    public function store(GroupRequest $request)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            Group::create($request->validated());

            return redirect()->route('groups.index')->with('success', 'Group created successfully');
        }
        else{
            return redirect()->route('login');
        }
    }


    /**
     * Shows the edit form for an specific group
     */
    public function edit(Group $group)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            return view('group.edit', compact('group'));
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Updates the group from the edit form
     */
    public function update(GroupRequest $request, Group $group)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $group->update($request->validated());

            return redirect()->route('groups.edit', $group)->with('success', 'Group updated successfully');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified group from storage.
     */
    public function destroy(Group $group)
    {
        if(Auth::check() && Auth::user()->hasRole('admin')){
            $group->delete();

            return redirect()->route('groups.index')->with('success', 'Group deleted successfully');
        }
        else{
            return redirect()->route('login');
        }
    }
}
