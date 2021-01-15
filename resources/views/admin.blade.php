@extends('home')

@section('content')

<br>
  <div>  <h2>Add product</h2>

    <form action="{{route('admin.add')}}" method = "post">
        <label>Artist name</label><br>
        <input type="text" name="name"><br>
        <br>
        <label >Album</label><br>
        <input type="text" id="lname" name="album_name" ><br><br>
        <label >Genre</label><br>
        <input type="text" id="lname" name="genre" ><br><br>
        @csrf
        <input type="submit" value="Add">
    </form>
  </div>
<br>
<br>
<div>

<h2>Delete product</h2>
    <h4>If you delete Artist, artists albums will be deleted by itself</h4>
<br>

<form action="{{route('admin.delete')}}" method="post">

    <label>Choose Artist</label><br>
    <select>
        @foreach($artists as $artist)
        <option>{{$artist->name}}</option>
        @endforeach
    </select>
    @csrf
    @method('DELETE')
    <button type="submit" value="artist">Delete Artist</button>
</form>
    <form action="{{route('admin.delete')}}" method="post">
<br>
    <label>Choose Album</label><br>
    <select>
        @foreach($albums as $album)
            <option>{{$album->album_name}}</option>
        @endforeach
    </select>
    @csrf
    @method('DELETE')
    <button type="submit" value="album">Delete Album</button>
    </form>
<br>
    <form action="{{route('admin.delete')}}" method="post">
    <label>Choose Genre</label><br>
    <select>
        @foreach($genres as $genre)
            <option>{{$genre->genre}}</option>
        @endforeach
    </select>
    @csrf
    @method('DELETE')
    <button type="submit" value="genre">Delete Album</button>
    </form>
</div>
@endsection
