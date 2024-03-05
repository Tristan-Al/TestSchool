@extends('layouts.table')

@section('title', 'Groups')

@section('module', 'Groups')

@section('table')
    @if (Auth::check() && Auth::user()->hasRole('admin'))
        <div class="py-2 px-4 border-b inline">
            <a href="{{ route('groups.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                onclick="return confirm('Are you sure you want to add a new group?')">
                New Group
            </a>
        </div>
    @endif
    <div class="max-w-2xl mx-auto pb-5">
        @if (count($groups) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">School Year</th>
                        <th class="py-2 px-4 border-b">Formation</th>
                        <th class="py-2 px-4 border-b">Year</th>
                        <th class="py-2 px-4 border-b">Denomination</th>
                        <th class="py-2 px-4 border-b">Shift</th>
                        @if (Auth::check() && Auth::user()->hasRole('admin'))
                            <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $formations = \App\Models\Formation::All();
                    @endphp
                    @foreach ($groups as $group)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $group->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $group->school_year }}</td>
                            <td class="py-2 px-4 border-b">
                                @foreach ($formations as $formation)
                                    @if ($formation->id == $group->formation_id)
                                        {{ $formation->acronym }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="py-2 px-4 border-b">{{ $group->year }}</td>
                            <td class="py-2 px-4 border-b">{{ $group->denomination }}</td>
                            <td class="py-2 px-4 border-b">{{ $group->shift }}</td>
                            @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('groups.edit', ['group' => $group]) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <form action="{{ route('groups.destroy', ['group' => $group->id]) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                            onclick="return confirm('Are you sure you want to delete this group?')">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $groups->links() }}
            </div>
        @else
            <p> No groups available. </p>
        @endif
    </div>
@endsection
