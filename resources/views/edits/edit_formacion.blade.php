@extends('edit_template')

@section('title')
    Edit Formacion
@endsection

@section('form')
    <form action="{{ route('confirmEditFormacion') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $formacion->id }}">
        <label for="denominacion">Denomination</label>
        <input type="text" placeholder="Denomination" name="denominacion" id="denominacion" maxlength="60" value="{{ $formacion->denominacion }}"><br>
        <label for="siglas">Acronym</label>
        <input type="text" placeholder="Acronym" name="siglas" id="siglas" maxlength="10" value="{{ $formacion->siglas }}"><br>
        <input type="submit" value="Edit"><br>
    </form>
@endsection