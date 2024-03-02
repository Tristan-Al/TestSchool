<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
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
        return view('group.create');
    }

    /**
     * Store a newly created group in the database.
     */
    public function store(GroupRequest $request)
    {
        Group::create($request->validated());

        return redirect()->route('groups.index')->with('success', 'Group created successfully');
    }


    /**
     * Shows the edit form for an specific group
     */
    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }

    /**
     * Updates the group from the edit form
     */
    public function update(GroupRequest $request, Group $group)
    {
        $group->update($request->validated());

        return redirect()->route('groups.edit', $group)->with('success', 'Group updated successfully');
    }

    /**
     * Remove the specified group from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success', 'Group deleted successfully');
    }
}
