@extends('home')

@section('content')

    <h3> Artist : {{ $id->name }} </h3>
    <img src="{{asset('image/'.$id->artist_img)}}">
    <h3> Album : {{ $id->album->pluck('album_name')}} </h3>

@endsection

