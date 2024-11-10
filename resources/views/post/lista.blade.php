@extends('layout.layout')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
    <table class="table table-striped">
        <thead>
            <th scope="col">Lp</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Data utworzenia</th>
        </thead>
        <tbody>
            @isset($posty)
            @if($posty->count())
            @php($lp=1)
            @foreach ($posty as $post)
            <tr>
                <th scope="row">{{ $lp++ }}</th>
                <td><a href="{{route('post.show',$post->id)}}">{{$post['tytul']}}</a></td>
                <td>{{$post->autor}}</td>
                <td>{{date('j F Y H:i',strtotime($post->created_at))}}</td>
            </tr>    
            @endforeach
            @else
            <tr>
                <th  scope="row" colspan="4">Nie ma żadnych postów</th>
            </tr>
            @endif
            @else
            <tr>
                <th  scope="row" colspan="4">Nie ma żadnych postów</th>
            </tr>    
            @endisset
        </tbody>
    </table>

@endsection

