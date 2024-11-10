@extends('layout.layout')
@section('tytul', 'Dodawanie postu')
@section('podtytul', 'Dodanie postu')
@section('tresc')
    <form action="{{route('post.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="tytul">Tytuł</label>
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{ old('tytul') }}"> 
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora postu" value="{{ old('autor') }}"> 
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email autora postu" value="{{ old('email') }}"> 
        </div>
        <div class="form-group">
            <label for="tresc">Treść</label>
            <textarea rows="4" class="form-control" name="tresc" id="tresc">{{ old('tresc') }}</textarea>
        </div>
        <button class="btn btn-primary form-btn mt-3" type="submit">Dodaj post</button>
    </form>
    
@endsection
