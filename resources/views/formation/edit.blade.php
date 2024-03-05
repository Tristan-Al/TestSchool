@extends('layouts.edit_template')

@section('title', 'Edit formation')

@section('form')
    @if ($errors->any())
        <div class="alert alert-danger text-red-500 pb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="max-w-2xl mx-auto px-5">
        <form action="{{ route('formations.update', ['formation' => $formation]) }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-600">ID: {{ $formation->id }}</label>
            </div>

            <div class="mb-4">
                <label for="denomination" class="block text-sm font-medium text-gray-600">Denomination</label>
                <input type="text" name="denomination" id="denomination" value="{{ $formation->denomination }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="acronym" class="block text-sm font-medium text-gray-600">Acronym</label>
                <input type="text" name="acronym" id="acronym" value="{{ $formation->acronym }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this formation?')">Save</button>
            </div>
        </form>
    </div>
@endsection
