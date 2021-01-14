<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
    .w3-bar{
        background: #e6efff;
        font-size: 35px;
    }
    .menu-icon {

        width: 100px;
        height: 100px;

    }
</style>
<body>
<img class="menu-icon" src="/storage/app/public/cd.png" width="100" height="100">
<!-- Navigation -->
<nav class="w3-bar container">
    @auth
        <a href="{{ url('/') }}" >Home</a>
        <a href="{{ url('/genres') }}" >Genres</a>
        <a href="{{ url('/albums') }}" >Albums</a>
        <a href="{{ url('/artists') }}" >Artists</a>
    @endauth
    @guest
        <a href="{{ url('/login') }}" >Login</a>
    @endguest
</nav>

<div class="container">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

