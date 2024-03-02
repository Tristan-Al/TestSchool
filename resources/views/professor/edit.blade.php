@extends('edit_template')

@section('title')
    Edit Professor
@endsection

@section('form')
    <form action="{{ route('confirmEditProfessor') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $professor->id }}">
        <label for="seneca_user">Seneca User (7 letters + 3 numbers)</label>
        <input type=text placeholder="Seneca username" name="seneca_user" id="seneca_user" pattern="[a-z]{7}[0-9]{3}"
            value="{{ $professor->seneca_user }}"><br>
        <label for="name">Name</label>
        <input type="text" placeholder="Name" name="name" id="name" maxlength="60"
            value="{{ $professor->name }}"><br>
        <label for="surname1">Surname</label>
        <input type="text" placeholder="Surname" name="surname1" id="surname1" maxlength="60"
            value="{{ $professor->surname1 }}"><br>
        <label for="surname2">Surname</label>
        <input type="text" placeholder="Surname" name="surname2" id="surname2" maxlength="60"
            value="{{ $professor->surname2 }}"><br>
        <label for="speciality">Speciality</label>
        <select name="speciality" id="speciality">
            <option value="secondary" <?php if ($professor->speciality == 'secondary') {
                echo 'selected';
            } ?>>Secondary Education</option>
            <option value="vocational_training" <?php if ($professor->speciality == 'vocational_training') {
                echo 'selected';
            } ?>>Profesional Formation</option>
        </select><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection
