@extends('layouts.edit_template')

@section('title', 'Edit subject')

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
        <form action="{{ route('subjects.update', ['subject' => $subject]) }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-600">ID: {{ $subject->id }}</label>
            </div>

            <div class="mb-4">
                <label for="formation_id" class="block text-sm font-medium text-gray-600">Formation</label>
                @php
                    $subject_formation = \App\Models\Formation::find($subject->formation_id);
                    $formations = \App\Models\Formation::where('id', '<>', $subject->formation_id)->get();
                @endphp
                <select name="formation_id" id="formation_id" class="mt-1 p-2 w-full border rounded-md">
                    <option selected value="{{ $subject->formation_id }}">{{ $subject_formation->acronym }}</option>
                    @foreach ($formations as $formation)
                        <option value="{{ $formation->id }}">{{ $formation->acronym }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="denomination" class="block text-sm font-medium text-gray-600">Denomination</label>
                <input type="text" name="denomination" id="denomination" value="{{ $subject->denomination }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="acronym" class="block text-sm font-medium text-gray-600">Acronym</label>
                <input type="text" name="acronym" id="acronym" value="{{ $subject->acronym }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-600">Year</label>
                <input type="number" step="1" min="1" max="4" name="year" id="year"
                    value="{{ $subject->year }}" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="hours" class="block text-sm font-medium text-gray-600">Hours</label>
                <input type="number" step="1" name="hours" id="hours" value="{{ $subject->hours }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="speciality" class="block text-sm font-medium text-gray-600">Speciality</label>
                <select name="speciality" id="speciality" class="mt-1 p-2 w-full border rounded-md">
                    @php
                        $options = ['secondary', 'vocational_training'];
                    @endphp
                    @foreach ($options as $option)
                        <option value="{{ $option }}" {{ $subject->speciality == $option ? 'selected' : '' }}>
                            {{ ucfirst($option) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this subject?')">Save</button>
            </div>
        </form>
    </div>
@endsection
