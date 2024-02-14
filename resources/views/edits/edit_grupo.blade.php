@extends('edit_template')

@section('title')
    Edit Group
@endsection

@section('form')
    <form action="{{ route('confirmEditGrupo') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $grupo->id }}">
        <label for="cursoEscolar">Seneca User (yyyy-yyyy)</label>
        <input type=text placeholder="School Year" name="cursoEscolar" id="cursoEscolar" pattern="[0-9]{4}-[0-9]{4}" value="{{ $profesor->usuarioSeneca }}"><br>
        <label for="formacion_id">Formation</label>
        <select name=formacion_id id="formacion_id">
            @foreach ($formaciones as $formacion)
                <option value="{{ $formacion->id }}" <?php if($formacion->id == $grupo->formacion_id){ echo "selected"; } ?>>{{ $formacion->denominacion }}</option>
            @endforeach
        </select>
        <select name=curso id="curso">
            <option value="1" <?php if($grupo->curso == "1"){ echo "selected"; } ?>>1st</option>
            <option value="2" <?php if($grupo->curso == "2"){ echo "selected"; } ?>>2nd</option>
            <option value="3" <?php if($grupo->curso == "3"){ echo "selected"; } ?>>3rd</option>
            <option value="4" <?php if($grupo->curso == "4"){ echo "selected"; } ?>>4th</option>
        </select>
        <label for="denominacion">Denomination</label>
        <input type="text" placeholder="Denomination" name="denominacion" id="denominacion" maxlength="60" value="{{ $grupo->denominacion }}"><br>
        <label for="turno">Shift</label>
        <select name="turno" id="turno">
            <option value="mañana" <?php if($grupo->turno == "mañana"){ echo "selected"; } ?>>Morning</option>
            <option value="tarde" <?php if($grupo->turno == "tarde"){ echo "selected"; } ?>>Afternoon</option>
        </select><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection