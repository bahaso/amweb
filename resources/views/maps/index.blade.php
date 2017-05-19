<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interactive Maps AM 2018 Bali</title>
    {!! html_css( 'bootstrap.css' ) !!}
    {!! html_css( 'theme.css' ) !!}
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .bg-dark-opaque {
            background: rgba(41, 41, 41, 0.9);
        }

        nav.bg-dark-opaque .navbar-nav li > a {
            color: white;
        }

        nav.bg-dark-opaque .navbar-text{
            color: white;
        }
        nav.bg-dark-opaque .navbar-nav li.active > a,
        nav.bg-dark-opaque .navbar-nav li.active > a:hover,
        nav.bg-dark-opaque .navbar-nav li.active > a:focus,
        nav.bg-dark-opaque .navbar-nav li > a:hover,
        nav.bg-dark-opaque .navbar-nav li > a:focus,
        nav.bg-dark-opaque .navbar-nav li.open > a:hover,
        nav.bg-dark-opaque .navbar-nav li.open > a:focus {
            color: white;
            background: rgb(41, 41, 41);
        }
        #navbar-menu{
            font-size: 14px;
        }
    </style>


</head>
<body>
<div id="map"></div>

<nav id="navbar-menu" class="navbar navbar-default bg-dark-opaque">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <p class="navbar-text">View</p>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">All <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Hotel</a></li>
            <li><a href="#">Venue</a></li>
            <li class="dropup">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Routes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->

</nav>
{!! html_js( 'jquery.min.js' ) !!}
{!! html_js( 'bootstrap.min.js' ) !!}
<script>
    var map;
    function initMap() {
        var nusaDuaConventionCenter = {lat: -8.799698, lng: 115.219639}
        map = new google.maps.Map(document.getElementById('map'), {
            center: nusaDuaConventionCenter,
            zoom: 16,
            disableDefaultUI: true,
        });

        map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(document.getElementById('navbar-menu'));
        var marker = new google.maps.Marker({
            position: nusaDuaConventionCenter,
            map: map,
            title: 'Hello World!'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvacqx3oxY37xNjmKVcCY-2zK73f38T5A&callback=initMap"
        async defer></script>
</body>
</html>