@foreach($artist as $artists)
<p>
    {{$artists->name}}
</p>
    <img src="{{$artists->artist_img}}">

     {{artist()->album->pluck('album_name')}}
@endforeach
