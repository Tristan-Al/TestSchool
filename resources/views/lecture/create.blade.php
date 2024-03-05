@extends('layouts.edit_template')

@section('title', 'Create lecture')

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
        <form action="{{ route('lectures.store') }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="group_id" class="block text-sm font-medium text-gray-600">Group</label>
                @php
                    $groups = \App\Models\Group::All();
                @endphp
                <select name="group_id" id="group_id" class="mt-1 p-2 w-full border rounded-md">
                    <option selected value="">...</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->denomination }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="subject_id" class="block text-sm font-medium text-gray-600">Subject</label>
                @php
                    $subjects = \App\Models\Subject::All();
                @endphp
                <select name="subject_id" id="subject_id" class="mt-1 p-2 w-full border rounded-md">
                    <option selected value="">...</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->acronym }}</option>
                    @endforeach
                </select>

            </div>

            <div class="mb-4">
                <label for="professor_id" class="block text-sm font-medium text-gray-600">Professor</label>
                @php
                    $professors = \App\Models\Professor::All();
                @endphp
                <select name="professor_id" id="professor_id" class="mt-1 p-2 w-full border rounded-md">
                    <option selected value="">...</option>
                    @foreach ($professors as $professor)
                        <option value="{{ $professor->id }}">
                            {{ $professor->name . ' ' . $professor->surname1 . ' ' . $professor->surname2 }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="denomination" class="block text-sm font-medium text-gray-600">Hours</label>
                <input type="number" step="1" name="denomination" id="denomination"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this formation?')">Save</button>
            </div>
        </form>
    </div>
@endsection
