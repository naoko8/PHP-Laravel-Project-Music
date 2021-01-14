@extends('home')

@section('content')

@foreach($artists as $artist)

    <h3><a name="artist_name" href="{{ route('single.artist', $artist->id) }}">{{$artist->name}}</a></h3>
{{--    <img src="{{$artist->artist_img}}">--}}
@endforeach

@endsection
