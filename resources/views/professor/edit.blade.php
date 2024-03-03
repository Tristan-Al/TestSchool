@extends('layouts.edit_template')

@section('title', 'Edit professor')

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
        <form action="{{ route('professors.update', ['professor' => $professor]) }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-600">ID: {{ $professor->id }}</label>
            </div>

            <div class="mb-4">
                <label for="seneca_user" class="block text-sm font-medium text-gray-600">Seneca user</label>
                <input type="text" name="seneca_user" id="seneca_user" value="{{ $professor->seneca_user }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" value="{{ $professor->name }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="surname1" class="block text-sm font-medium text-gray-600">Surname 1</label>
                <input type="text" name="surname1" id="surname1" value="{{ $professor->surname1 }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="surname2" class="block text-sm font-medium text-gray-600">Surame 2</label>
                <input type="text" name="surname2" id="surname2" value="{{ $professor->surname2 }}"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="speciality" class="block text-sm font-medium text-gray-600">Speciality</label>
                <select name="speciality" id="speciality" class="mt-1 p-2 w-full border rounded-md">
                    @php
                        $options = ['secondary', 'vocational_training'];
                    @endphp
                    @foreach ($options as $option)
                        <option value="{{ $option }}" {{ $professor->speciality == $option ? 'selected' : '' }}>
                            {{ ucfirst($option) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="return confirm('Are you sure you want to update this professor?')">Save</button>
            </div>
        </form>
    </div>
@endsection
