@extends('layouts.table')

@section('title', 'Formations')

@section('module', 'Formations')

@section('table')
    <div class="max-w-2xl mx-auto pb-5">
        @if (count($formations) > 0)
            <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Denomination</th>
                        <th class="py-2 px-4 border-b">Acronym</th>
                        <th class="py-2 px-4 border-b" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formations as $formation)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $formation->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $formation->denomination }}</td>
                            <td class="py-2 px-4 border-b">{{ $formation->acronym }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('formations.edit', ['formation' => $formation]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ route('formations.destroy', ['formation' => $formation->id]) }}"
                                    method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        onclick="return confirm('Are you sure you want to delete this formation?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $formations->links() }}
            </div>
        @else
            <p> No formations available. </p>
        @endif
    </div>
@endsection
