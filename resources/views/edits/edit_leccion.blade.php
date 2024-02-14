@extends('edit_template')

@section('title')
    Edit Lecture
@endsection

@section('form')
    <form action="{{ route('confirmEditLeccion') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $leccion->id }}">
        <label for="cursoEscolar">Seneca User (yyyy-yyyy)</label>
        <input type=text placeholder="School Year" name="cursoEscolar" id="cursoEscolar" pattern="[0-9]{4}-[0-9]{4}" value="{{ $profesor->usuarioSeneca }}"><br>
        <label for="grupo_id">Group</label>
        <select name=grupo_id id="grupo_id">
            @foreach ($formaciones as $formacion)
                <option value="{{ $grupo->id }}" <?php if($grupo->id == $leccion->grupo_id){ echo "selected"; } ?>>{{ $grupo->denominacion }}</option>
            @endforeach
        </select>
        <label for="modulo_id">Subject</label>
        <select name=modulo_id id="modulo_id">
            @foreach ($formaciones as $formacion)
                <option value="{{ $modulo->id }}" <?php if($modulo->id == $leccion->modulo){ echo "selected"; } ?>>{{ $modulo->denominacion }}</option>
            @endforeach
        </select>
        <label for="profesor_id">Professor</label>
        <select name=profesor_id id="profesor_id">
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}" <?php if($profesor->id == $leccion->profesor_id){ echo "selected"; } ?>>{{ $profesor->nombre }} {{ $profesor->apellido1 }} {{ $profesor->apellido2 }}</option>
            @endforeach
        </select>
        <label for="horas">Hours</label>
        <input type="number" name="horas" id="horas" min="1" max="30" value="{{ $leccion->horas }}"><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection