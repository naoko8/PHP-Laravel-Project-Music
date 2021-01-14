@foreach($albums as $album)

    <h3><a href="{{ url('/album/'.$album->id) }}">{{$album->album_name}}</a></h3>
    <img src="{{$album->album_img}}">
@endforeach
