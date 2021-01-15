
@extends('home')

@section('content')
@foreach($album as $albums)
    <p>
        {{$albums->album_name}}
    </p>
    <img src="{{$albums->album_img}}">

    <p> Artist : {{ $albums->artist->pluck('name') }} </p>

    <img src="{{asset('image/'.$albums->artist->pluck('artist_img' ))}}"

    {{$albums->genres}}
@endforeach
@endsection
