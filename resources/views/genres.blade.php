@extends('home')

@section('content')

@foreach($genres as $genre)
    <h3><a href="{{ url('/genre/'.$genre->id) }}">{{$genre->genre}}</a></h3>
    //genre->genre aris shesacvleli ganris magivrad unda amomigdos mag ganris albomebi
    // anu albat dasaceri ikneba rame logika?
@endforeach

@endsection
