@extends('layout.layout')
@section('tytul', 'Edytowanie postu')
@section('podtytul', 'Edycja postu')
@section('tresc')
@isset($post)
@if($errors->any())
<div class="alert alert-danger">Uzupełnij brakujące pola</div>
@endif
    <form action="{{route('post.update', $post->id)}}" method="post" >
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="tytul">Tytuł</label>
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif"> 
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
            <textarea rows="4" class="form-control" name="tresc" id="tresc">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
        </div>
        <button class="btn btn-primary form-btn mt-3" type="submit">Zmień post</button>
        @if ($errors->get('tresc'))
        <div class="alert alert-danger mt-1">
            @foreach ($errors->get('tresc') as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
        <a href="{{route('post.index')}}"><button class="btn btn-success form-btn mt-3" type="button">Powrót do listy</button></a>
    </form>
@endisset
@endsection
