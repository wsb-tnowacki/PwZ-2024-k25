@extends('layout.layout')
@section('tytul', 'Edytowanie postu')
@section('podtytul', 'Edycja postu')
@section('tresc')
@isset($post)
    <form action="{{route('post.update', $post->id)}}" method="post" >
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="tytul">Tytuł</label>
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif"> 
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora postu" value="@if(old('autor') !== null){{old('autor')}}@else{{$post->autor}}@endif"> 
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email autora postu" value="@if(old('email') !== null){{old('email')}}@else{{$post->email}}@endif"> 
        </div>
        <div class="form-group">
            <label for="tresc">Treść</label>
            <textarea rows="4" class="form-control" name="tresc" id="tresc">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
        </div>
        <button class="btn btn-primary form-btn mt-3" type="submit">Zmień post</button>
        <a href="{{route('post.index')}}"><button class="btn btn-success form-btn mt-3" type="button">Powrót do listy</button></a>
    </form>
@endisset
@endsection
