@extends('layout')

@section('content')
    @if ($flyers)
        <h2>Flyer List</h2>

        <hr>

        <ul class="list-group">
            @foreach($flyers as $flyer)
                <a href="/{{$flyer->zip}}/{{$flyer->street}}"><li class="list-group-item">{{$flyer->street}}</li></a>
            @endforeach
        </ul>
    @else
        nothing
    @endif

@stop