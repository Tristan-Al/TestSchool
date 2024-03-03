@extends('layouts.table')

@section('title', 'Lectures')

@section('module', 'Lectures')

@section('table')
    @if (Auth::check() && Auth::user()->hasRole('admin'))
        <div class="py-2 px-4 border-b inline">
            <a href="{{ route('lectures.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                onclick="return confirm('Are you sure you want to add a new lecture?')">
                New Lecture
            </a>
        </div>
    @endif
    <div class="max-w-2xl mx-auto pb-5">
        @if (count($lectures) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Group</th>
                        <th class="py-2 px-4 border-b">Subject</th>
                        <th class="py-2 px-4 border-b">Professor</th>
                        <th class="py-2 px-4 border-b">Hours</th>
                        @if (Auth::check() && Auth::user()->hasRole('admin'))
                            <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groups = \App\Models\Group::All();
                        $subjects = \App\Models\Subject::All();
                        $professors = \App\Models\Professor::All();
                    @endphp
                    @foreach ($lectures as $lecture)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $lecture->id }}</td>
                            <td class="py-2 px-4 border-b">
                                @foreach ($groups as $group)
                                    @if ($group->id == $lecture->group_id)
                                        {{ $group->denomination }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="py-2 px-4 border-b">
                                @foreach ($subjects as $subject)
                                    @if ($subject->id == $lecture->subject_id)
                                        {{ $subject->acronym }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="py-2 px-4 border-b">
                                @foreach ($professors as $professor)
                                    @if ($professor->id == $lecture->professor_id)
                                        {{ $professor->name . ' ' . $professor->surname1 . ' ' . $professor->surname2 }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="py-2 px-4 border-b">{{ $lecture->hours }}</td>
                            @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('lectures.edit', ['lecture' => $lecture]) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <form action="{{ route('lectures.destroy', ['lecture' => $lecture->id]) }}"
                                        method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                            onclick="return confirm('Are you sure you want to delete this lecture?')">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $lectures->links() }}
            </div>
        @else
            <p> No lectures available. </p>
        @endif
    </div>
@endsection
