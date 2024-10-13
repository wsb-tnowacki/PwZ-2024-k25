@extends('layout.layout')
@section('tytul')
    O nas
@endsection
@section('podtytul')
    O nas w podtytule
@endsection
@section('tresc')
    <div class="title m-b-md">
        Strona o nas 
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione numquam illo ipsam aperiam. Perspiciatis ut cum eius totam, repellat necessitatibus provident porro commodi aliquam consectetur. Nemo commodi quas cum labore.
       {{-- @dump($zadania) --}} 
       <ol>
        @foreach ($zadania as $zadanie)
           <li>{{$zadanie}}</li>
       @endforeach
       </ol>
       

    </div>
@endsection