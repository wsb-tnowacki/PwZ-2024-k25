@extends('layout.layout')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
@isset($post)
<div>
    <div class="form-group">
        <label for="tytul">Tytuł</label>
        <input type="text" class="form-control" name="tytul" id="tytul" value="{{ $post->tytul }}" disabled> 
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor"  value="{{ $post->user->name }}" disabled> 
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email"  value="{{ $post->user->email }}" disabled> 
    </div>
    <div class="form-group">
        <label for="data1">Data utworzenia:</label>
        <input type="text" class="form-control" name="data1" id="data1"  value="{{ date('j F Y H:i:s',strtotime($post->created_at)) }}" disabled> 
    </div>
    <div class="form-group">
        <label for="data2">Data zmiany:</label>
        <input type="text" class="form-control" name="data2" id="data2"  value="{{ date('j F Y H:i:s',strtotime($post->updated_at)) }}" disabled> 
    </div>
    <div class="form-group">
        <label for="tresc">Treść</label>
        <textarea rows="4" class="form-control" name="tresc" id="tresc" disabled>{{$post->tresc}}</textarea>
    </div>
    <a href="{{route('post.index')}}"><button class="btn btn-primary form-btn mt-3" type="submit">Powrót do listy</button></a> 
</div>

@endisset


@endsection


