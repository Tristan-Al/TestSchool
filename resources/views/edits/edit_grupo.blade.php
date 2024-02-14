@extends('edit_template')

@section('title')
    Edit Group
@endsection

@section('form')
    <form action="{{ route('confirmEditGroup') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $group->id }}">
        <label for="schoolYear">School Year (yyyy-yyyy)</label>
        <input type=text placeholder="School Year" name="schoolYear" id="schoolYear" pattern="[0-9]{4}-[0-9]{4}" value="{{ $profesor->usuarioSeneca }}"><br>
        <label for="formation_id">Formation</label>
        <select name=formation_id id="formation_id">
            @foreach ($formations as $formation)
                <option value="{{ $formation->id }}" <?php if($formation->id == $group->formation_id){ echo "selected"; } ?>>{{ $formation->denomination }}</option>
            @endforeach
        </select>
        <select name=year id="year">
            <option value="1" <?php if($group->year == "1"){ echo "selected"; } ?>>1st</option>
            <option value="2" <?php if($group->year == "2"){ echo "selected"; } ?>>2nd</option>
            <option value="3" <?php if($group->year == "3"){ echo "selected"; } ?>>3rd</option>
            <option value="4" <?php if($group->year == "4"){ echo "selected"; } ?>>4th</option>
        </select>
        <label for="denomination">Denomination</label>
        <input type="text" placeholder="Denomination" name="denomination" id="denomination" maxlength="60" value="{{ $group->denomination }}"><br>
        <label for="shift">Shift</label>
        <select name="shift" id="shift">
            <option value="morning" <?php if($group->shift == "morning"){ echo "selected"; } ?>>Morning</option>
            <option value="afternoon" <?php if($group->shift == "afternoon"){ echo "selected"; } ?>>Afternoon</option>
        </select><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection