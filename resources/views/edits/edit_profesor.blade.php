@extends('edit_template')

@section('title')
    Edit Professor
@endsection

@section('form')
    <form action="{{ route('confirmEditProfesor') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $profesor->id }}">
        <label for="usuarioSeneca">Seneca User (7 letters + 3 numbers)</label>
        <input type=text placeholder="Seneca username" name="usuarioSeneca" id="usuarioSeneca" pattern="[a-z]{7}[0-9]{3}" value="{{ $profesor->usuarioSeneca }}"><br>
        <label for="nombre">Name</label>
        <input type="text" placeholder="Name" name="nombre" id="nombre" maxlength="60" value="{{ $profesor->nombre }}"><br>
        <label for="apellido1">Surname</label>
        <input type="text" placeholder="Surname" name="apellido1" id="apellido1" maxlength="60" value="{{ $profesor->apellido1 }}"><br>
        <label for="apellido2">Surname</label>
        <input type="text" placeholder="Surname" name="apellido2" id="apellido2" maxlength="60" value="{{ $profesor->apellido2 }}"><br>
        <label for="especialidad">Speciality</label>
        <select name="especialidad" id="especialidad">
            <option value="secundaria" <?php if($profesor->especialidad == "secundaria"){ echo "selected"; } ?>>Secondary Education</option>
            <option value="formacion profesional" <?php if($profesor->especialidad == "formacion profesional"){ echo "selected"; } ?>>Profesional Formation</option>
        </select><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection