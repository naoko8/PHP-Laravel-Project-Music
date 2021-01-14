<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<nav class="w3-bar">
    <a href="{{ url('/home') }}" >Home</a>
    <a href="{{ url('/genres') }}" >Genres</a>
    <a href="{{ url('/albums') }}" >Albums</a>
    <a href="{{ url('/artists') }}" >Artists</a>
    <a href="{{ url('/login') }}" >Login</a>
</nav>

{{--<section>--}}
{{--    <img class="mySlides" src="img_band_la.jpg"--}}
{{--         style="width:60%">--}}
{{--    <img class="mySlides" src="img_band_ny.jpg"--}}
{{--         style="width:60%">--}}
{{--    <img class="mySlides" src="img_band_chicago.jpg"--}}
{{--         style="width:600%">--}}
{{--</section>--}}

<!-- Band Description -->
{{--<section class="w3-container w3-center w3-content" style="max-width:600px">--}}
{{--    <h2 class="w3-wide">THE BAND</h2>--}}
{{--    <p class="w3-opacity"><i>We love music</i></p>--}}
{{--    <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--</section>--}}


<footer>
    <p>
        Powered by <a href="Nina Potskhshvili Zhong" target="_blank">Nina</a>
    </p>
</footer>
<a href="#" id="menu-icon"></a>
{{--<script>--}}
{{--    // Automatic Slideshow - change image every 3 seconds--}}
{{--    var myIndex = 0;--}}
{{--    carousel();--}}

{{--    function carousel() {--}}
{{--        var i;--}}
{{--        var x = document.getElementsByClassName("mySlides");--}}
{{--        for (i = 0; i < x.length; i++) {--}}
{{--            x[i].style.display = "none";--}}
{{--        }--}}
{{--        myIndex++;--}}
{{--        if (myIndex > x.length) {myIndex = 1}--}}
{{--        x[myIndex-1].style.display = "block";--}}
{{--        setTimeout(carousel, 3000);--}}
{{--    }--}}
</script>

</body>
</html>

