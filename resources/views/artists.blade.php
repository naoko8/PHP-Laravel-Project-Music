@foreach($artists as $artist)

    <h3><a name="artist_name" href="{{ url('/artist/'.$artist->id) }}">{{$artist->name}}</a></h3>
    <img src="{{$artist->artist_img}}">
@endforeach
