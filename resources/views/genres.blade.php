@extends('home')

@section('content')

@foreach($genres as $genre)
    <h3><a href="{{ url('/genre/'.$genre->id) }}">{{$genre->genre}}</a></h3>

@endforeach

@endsection
