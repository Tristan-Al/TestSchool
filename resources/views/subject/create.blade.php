@extends('layouts.edit_template')

@section('title', 'Create subject')

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
        <form action="{{ route('subjects.store') }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="formation_id" class="block text-sm font-medium text-gray-600">Formation</label>
                @php
                    $formations = \App\Models\Formation::All();
                @endphp
                <select name="formation_id" id="formation_id" class="mt-1 p-2 w-full border rounded-md">
                    <option selected value="">...</option>
                    @foreach ($formations as $formation)
                        <option value="{{ $formation->id }}">{{ $formation->acronym }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="denomination" class="block text-sm font-medium text-gray-600">Denomination</label>
                <input type="text" name="denomination" id="denomination"
                    placeholder="E.g.: Introducción a la Programación" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="acronym" class="block text-sm font-medium text-gray-600">Acronym</label>
                <input type="text" name="acronym" id="acronym" placeholder="E.g.: INTRO"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-600">Year</label>
                <input type="number" step="1" min="1" max="4" name="year" id="year"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="hours" class="block text-sm font-medium text-gray-600">Hours</label>
                <input type="number" step="1" name="hours" id="hours"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="speciality" class="block text-sm font-medium text-gray-600">Speciality</label>
                <select name="speciality" id="speciality" class="mt-1 p-2 w-full border rounded-md">
                    @php
                        $options = ['secondary', 'vocational_training'];
                    @endphp
                    <option selected value="">...</option>
                    @foreach ($options as $option)
                        <option value="{{ $option }}">
                            {{ ucfirst($option) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this formation?')">Save</button>
            </div>
        </form>
    </div>
@endsection
