@extends('edit_template')

@section('title')
    Edit Subject
@endsection

@section('form')
    <form action="{{ route('confirmEditSubject') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $subject->id }}">
        <label for="formation_id">Formation</label>
        <select name=formation_id id="formation_id">
            @foreach ($formations as $formation)
                <option value="{{ $formation->id }}" <?php if($formation->id == $subject->formation_id){ echo "selected"; } ?>>{{ $formation->denomination }}</option>
            @endforeach
        </select>
        <label for="denomination">Denomination</label>
        <input type="text" placeholder="Denomination" name="denomination" id="denomination" maxlength="60" value="{{ $subject->denomination }}"><br>
        <label for="acronym">Acronym</label>
        <input type="text" placeholder="Acronym" name="acronym" id="acronym" maxlength="10" value="{{ $subject->acronym }}"><br>
        <label for="year">Year</label>
        <select name=year id="year">
            <option value="1" <?php if($subject->year == "1"){ echo "selected"; } ?>>1st</option>
            <option value="2" <?php if($subject->year == "2"){ echo "selected"; } ?>>2nd</option>
            <option value="3" <?php if($subject->year == "3"){ echo "selected"; } ?>>3rd</option>
            <option value="4" <?php if($subject->year == "4"){ echo "selected"; } ?>>4th</option>
        </select>
        <label for="hours">Hours</label>
        <input type="number" name="hours" id="hours" min="1" max="30" value="{{ $subject->hours }}"><br>
        <label for="speciality">Speciality</label>
        <select name="speciality" id="speciality">
            <option value="secondary" <?php if($subject->speciality == "secondary"){ echo "selected"; } ?>>Secondary Education</option>
            <option value="vocational training" <?php if($subject->speciality == "vocational training"){ echo "selected"; } ?>>vocational training</option>
        </select><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection