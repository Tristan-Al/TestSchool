@extends('edit_template')

@section('title')
    Edit Lecture
@endsection

@section('form')
    <form action="{{ route('confirmEditLecture') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $lecture->id }}">
        <label for="group_id">Group</label>
        <select name=group_id id="group_id">
            @foreach ($formations as $formation)
                <option value="{{ $group->id }}" <?php if ($group->id == $lecture->group_id) {
                    echo 'selected';
                } ?>>{{ $group->denomination }}</option>
            @endforeach
        </select>
        <label for="subject_id">Subject</label>
        <select name=subject_id id="subject_id">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" <?php if ($subject->id == $lecture->subject) {
                    echo 'selected';
                } ?>>{{ $subject->denomination }}</option>
            @endforeach
        </select>
        <label for="professor_id">Professor</label>
        <select name=professor_id id="professor_id">
            @foreach ($professores as $professor)
                <option value="{{ $professor->id }}" <?php if ($professor->id == $lecture->professor_id) {
                    echo 'selected';
                } ?>>{{ $professor->name }} {{ $professor->apellido1 }}
                    {{ $professor->apellido2 }}</option>
            @endforeach
        </select>
        <label for="hours">Hours</label>
        <input type="number" name="hours" id="hours" min="1" max="30"
            value="{{ $lecture->hours }}"><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection
