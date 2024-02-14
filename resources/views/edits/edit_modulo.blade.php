@extends('edit_template')

@section('title')
    Edit Subject
@endsection

@section('form')
    <form action="{{ route('confirmEditModulo') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $modulo->id }}">
        <label for="formacion_id">Formation</label>
        <select name=formacion_id id="formacion_id">
            @foreach ($formaciones as $formacion)
                <option value="{{ $formacion->id }}" <?php if($formacion->id == $modulo->formacion_id){ echo "selected"; } ?>>{{ $formacion->denominacion }}</option>
            @endforeach
        </select>
        <label for="denominacion">Denomination</label>
        <input type="text" placeholder="Denomination" name="denominacion" id="denominacion" maxlength="60" value="{{ $modulo->denominacion }}"><br>
        <label for="siglas">Acronym</label>
        <input type="text" placeholder="Acronym" name="siglas" id="siglas" maxlength="10" value="{{ $modulo->siglas }}"><br>
        <label for="curso">Year</label>
        <select name=curso id="curso">
            <option value="1" <?php if($modulo->curso == "1"){ echo "selected"; } ?>>1st</option>
            <option value="2" <?php if($modulo->curso == "2"){ echo "selected"; } ?>>2nd</option>
            <option value="3" <?php if($modulo->curso == "3"){ echo "selected"; } ?>>3rd</option>
            <option value="4" <?php if($modulo->curso == "4"){ echo "selected"; } ?>>4th</option>
        </select>
        <label for="horas">Hours</label>
        <input type="number" name="horas" id="horas" min="1" max="30" value="{{ $modulo->horas }}"><br>
        <label for="especialidad">Speciality</label>
        <select name="especialidad" id="especialidad">
            <option value="secundaria" <?php if($modulo->especialidad == "secundaria"){ echo "selected"; } ?>>Secondary Education</option>
            <option value="formacion profesional" <?php if($modulo->especialidad == "formacion profesional"){ echo "selected"; } ?>>Profesional Formation</option>
        </select><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection