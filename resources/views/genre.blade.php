@extends('home')

@section('content')

@foreach($genre as $genres)
    <p>
        {{$genres->genre}}
        {{ $genres->album }}
        {{ $genres->album->pluck('artist') }}
    </p>

@endforeach

@endsection
