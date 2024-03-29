@extends('layouts.table')

@section('title', 'Professors')

@section('module', 'Professors')

@section('table')
    @if (Auth::check() && Auth::user()->hasRole('admin'))
        <div class="py-2 px-4 border-b inline">
            <a href="{{ route('professors.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                New Professor
            </a>
        </div>
    @endif
    <div class="max-w-2xl mx-auto pb-5">
        @if (count($professors) > 0)
            <form method="get">
                <input class="search-field mt-1 p-2 w-full border rounded-md" type="search" name="search"
                    placeholder="Search...">
            </form>
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        @if (Auth::check() && Auth::user()->hasRole('admin'))
                            <th class="py-2 px-4 border-b">ID</th>
                        @endif
                        <th class="py-2 px-4 border-b">Seneca user</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Surname 1</th>
                        <th class="py-2 px-4 border-b">Surname 2</th>
                        <th class="py-2 px-4 border-b">Speciality</th>
                        @if (Auth::check() && Auth::user()->hasRole('admin'))
                            <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professors as $professor)
                        <tr>
                            @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <td class="py-2 px-4 border-b">{{ $professor->id }}</td>
                            @endif
                            <td class="py-2 px-4 border-b">{{ $professor->seneca_user }}</td>
                            <td class="py-2 px-4 border-b">{{ $professor->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $professor->surname1 }}</td>
                            <td class="py-2 px-4 border-b">{{ $professor->surname2 }}</td>
                            <td class="py-2 px-4 border-b">{{ $professor->speciality }}</td>
                            @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('professors.edit', ['professor' => $professor]) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <form action="{{ route('professors.destroy', ['professor' => $professor->id]) }}"
                                        method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                            onclick="return confirm('Are you sure you want to delete this professor?')">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $professors->links() }}
            </div>
        @else
            <p> No professors available. </p>
        @endif
    </div>
@endsection
