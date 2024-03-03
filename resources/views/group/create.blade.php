@extends('layouts.edit_template')

@section('title', 'Create group')

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
        <form action="{{ route('groups.store') }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="school_year" class="block text-sm font-medium text-gray-600">School Year</label>
                <input type="text" name="school_year" id="school_year" placeholder="E.g.: 2023-24"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

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
                <label for="year" class="block text-sm font-medium text-gray-600">Year</label>
                <input type="number" step="1" min="1" max="4" name="year" id="year"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="denomination" class="block text-sm font-medium text-gray-600">Denomination</label>
                <input type="text" name="denomination" id="denomination" placeholder="E.g.: 2DAWB"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="shift" class="block text-sm font-medium text-gray-600">Shift</label>
                <select name="shift" id="shift" class="mt-1 p-2 w-full border rounded-md">
                    @php
                        $options = ['morning', 'afternoon'];
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
