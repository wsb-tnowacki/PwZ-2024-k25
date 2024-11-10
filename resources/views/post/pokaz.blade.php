@extends('layout.layout')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
@isset($post)
<div class="form-group">
    <label for="tytul">Tytuł</label>
    <input type="text" class="form-control" name="tytul" id="tytul" value="{{ $post->tytul }}" disabled> 
</div>
<div class="form-group">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" name="autor" id="autor"  value="{{ $post->autor }}" disabled> 
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email"  value="{{ $post->email }}" disabled> 
</div>
<div class="form-group">
    <label for="data1">Data utworzenia:</label>
    <input type="text" class="form-control" name="data1" id="data1"  value="{{ $post->created_at }}" disabled> 
</div>
<div class="form-group">
    <label for="data2">Data zmiany:</label>
    <input type="text" class="form-control" name="data2" id="data2"  value="{{ $post->updated_at }}" disabled> 
</div>
<div class="form-group">
    <label for="tresc">Treść</label>
    <textarea rows="4" class="form-control" name="tresc" id="tresc" disabled>{{$post->tresc}}</textarea>
</div>
<a href="{{route('post.index')}}"><button class="btn btn-primary form-btn mt-3" type="submit">Powrót do listy</button></a> 
@endisset


@endsection


