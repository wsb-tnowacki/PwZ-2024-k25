@extends('layout.layout')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
<div>
    <table class="table table-striped">
        <thead>
            <th scope="col">Lp</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Data utworzenia</th>
            @auth
            <th scope="col">Akcja</th>            
            @endauth

        </thead>
        <tbody>
            @isset($posty)
            @if($posty->count())
            @php($lp=1)
            @php($lp=$posty->firstItem())
            @foreach ($posty as $post)
            <tr>
                <th scope="row">{{ $lp++ }}</th>
                <td scope="row"><a href="{{route('post.show',$post->id)}}">{{$post['tytul']}}</a></td>
                <td scope="row">{{$post->autor}}</td>
                <td scope="row">{{date('j F Y H:i',strtotime($post->created_at))}}</td>
                @auth
                <td class="d-flex">
                    <a href="{{route('post.edit', $post->id)}}"><button type="button" class="btn btn-success form-btn m-1">E</button></a>
                    <form action="{{route('post.destroy', $post->id)}}" method="post" onsubmit="return confirmDelete()">@csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger form-btn m-1">X</button>
                    </form>
                </td>        
                @endauth

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
@isset($posty)
{{ $posty->links() }}  
@endisset
    <script>
        function confirmDelete()
        {
            return confirm("Czy na pewno chcesz usunąć ten post?");
        }
    </script>
</div>
    

@endsection

