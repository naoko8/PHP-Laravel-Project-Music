@extends('home')

@section('content')

@foreach($genre as $genres)
    <p>
        {{$genres->genre}}
    </p>
    <div>
        <li>{{ $genres->album->pluck('album_name')}}</li>
        {{$genres->album->pluck('album_img')}}
        <li>{{ $genres->album}}</li>

    </div>

@endforeach

@endsection
