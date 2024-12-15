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
        @if ($errors->get('tytul'))
        <div class="alert alert-danger mt-1">
            @foreach ($errors->get('tytul') as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
        <div class="form-group">
            <label for="tresc">Treść</label>
            <textarea rows="4" class="form-control" name="tresc" id="tresc">{{ old('tresc') }}</textarea>
        </div>
        @if ($errors->get('tresc'))
        <div class="alert alert-danger mt-1">
            @foreach ($errors->get('tresc') as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
        <button class="btn btn-primary form-btn mt-3" type="submit">Dodaj post</button>
    </form>
    
@endsection
