@extends('edit_template')

@section('title')
    Edit Formation
@endsection

@section('form')
    <form action="{{ route('confirmEditFormation') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $formation->id }}">
        <label for="denomination">Denomination</label>
        <input type="text" placeholder="Denomination" name="denomination" id="denomination" maxlength="60" value="{{ $formation->denomination }}"><br>
        <label for="acronym">Acronym</label>
        <input type="text" placeholder="Acronym" name="acronym" id="acronym" maxlength="10" value="{{ $formation->acronym }}"><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection