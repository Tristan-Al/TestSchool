@extends('layouts.table')

@section('title', 'Subjects')

@section('module', 'Subjects')

@section('table')
    @if (Auth::check() && Auth::user()->hasRole('admin'))
        <div class="py-2 px-4 border-b inline">
            <a href="{{ route('subjects.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                onclick="return confirm('Are you sure you want to add a new subject?')">
                New Subject
            </a>
        </div>
    @endif
    <div class="max-w-2xl mx-auto pb-5">
        @if (count($subjects) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Formation</th>
                        <th class="py-2 px-4 border-b">Denomination</th>
                        <th class="py-2 px-4 border-b">Acronym</th>
                        <th class="py-2 px-4 border-b">Year</th>
                        <th class="py-2 px-4 border-b">Hours</th>
                        <th class="py-2 px-4 border-b">Speciality</th>
                        @if (Auth::check() && Auth::user()->hasRole('admin'))
                            <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $formations = \App\Models\Formation::All();
                    @endphp
                    @foreach ($subjects as $subject)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $subject->id }}</td>
                            <td class="py-2 px-4 border-b">
                                @foreach ($formations as $formation)
                                    @if ($formation->id == $subject->formation_id)
                                        {{ $formation->acronym }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="py-2 px-4 border-b">{{ $subject->denomination }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject->acronym }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject->year }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject->hours }}</td>
                            <td class="py-2 px-4 border-b">{{ $subject->speciality }}</td>
                            @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('subjects.edit', ['subject' => $subject]) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <form action="{{ route('subjects.destroy', ['subject' => $subject->id]) }}"
                                        method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                            onclick="return confirm('Are you sure you want to delete this formation?')">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $subjects->links() }}
            </div>
        @else
            <p> No subjects available. </p>
        @endif
    </div>
@endsection
