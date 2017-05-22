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

        .bg-dark-opaque,
        nav.bg-dark-opaque .navbar-nav .dropdown-menu {
            background: rgba(41, 41, 41, 0.9);
        }

        nav.bg-dark-opaque .navbar-nav .dropdown-menu {
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        nav.bg-dark-opaque .navbar-nav li.divider {
            background: #757171;
        }

        nav.bg-dark-opaque .navbar-nav li > a {
            color: white;
        }

        nav.bg-dark-opaque .navbar-text {
            color: white;
        }

        nav.bg-dark-opaque .navbar-nav li.active > a,
        nav.bg-dark-opaque .navbar-nav li.active > a:hover,
        nav.bg-dark-opaque .navbar-nav li.active > a:focus,
        nav.bg-dark-opaque .navbar-nav li > a:hover,
        nav.bg-dark-opaque .navbar-nav li > a:focus,
        nav.bg-dark-opaque .navbar-nav li.open > a:hover,
        nav.bg-dark-opaque .navbar-nav li.open > a,
        nav.bg-dark-opaque .navbar-nav li.open > a:focus {
            color: white;
            background: rgb(41, 41, 41);
        }

        #navbar-menu {
            font-size: 14px;
        }

        .dropdown-menu.column {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
            width: 200px;
        }
    </style>


</head>
<body>
<div id="map"></div>

<nav id="navbar-menu" class="navbar  bg-dark-opaque">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <p class="navbar-text"><a href="{{url('/')}}">Back To Home</a></p>
        <p class="navbar-text">View</p>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">All <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Hotel</a></li>
            <li><a href="#">Venue</a></li>
            <li class="dropup">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Routes <span class="caret"></span></a>
                <ul class="dropdown-menu column">
                    <li><a href="#">Route A</a></li>
                    <li><a href="#">Route B</a></li>
                    <li><a href="#">Route C</a></li>
                    <li><a href="#">Route D</a></li>
                    <li><a href="#">Route E</a></li>
                    <li><a href="#">Route F</a></li>
                    <li><a href="#">Route G</a></li>
                </ul>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->

</nav>
{!! html_js( 'jquery.min.js' ) !!}
{!! html_js( 'bootstrap.min.js' ) !!}
<script>
    var LabelTypes = {
        venue: 'V',
        hotel: 'H',
        route: 'R',
        airport: 'A'
    }
    var locations = [
        {

            latLng: {
                lat: -8.746695,
                lng: 115.166712
            },
            type: "airport",

        },
        {
            title: 'Grand Hyatt',
            latLng: {
                lat: -8.803608,
                lng: 115.233205
            },
            type: "hotel",

        },
        {
            title: 'The Laguna Resort And Spa',
            latLng: {
                lat: -8.797470,
                lng: 115.230748
            },
            type: "hotel",

        },
        {
            title: 'Melia Bali',
            latLng: {
                lat: -8.799312,
                lng: 115.232833
            },
            type: "hotel",

        },
        {
            title: 'Ayodya Resort Bali',
            latLng: {
                lat: -8.808407,
                lng: 115.229310
            },
            type: "hotel",

        },
        {
            title: 'Inaya hotel',
            latLng: {
                lat: -8.806965,
                lng: 115.230240
            },
            type: "hotel",

        },
        {
            title: 'Courtyart Mariot Bali, Nusa Dua',
            latLng: {
                lat: -8.806881,
                lng: 115.225362
            },
            type: "hotel",

        },
        {
            title: 'Westin Resort Nusa Dua',
            latLng: {
                lat: -8.795782,
                lng: 115.230536
            },
            type: "hotel",

        },
        {
            title: 'Sofitel Bali',
            latLng: {
                lat: -8.791508,
                lng: 115.230532
            },
            type: "hotel",

        },
        {
            title: 'Bali Nusa Dua Convention Center',
            latLng: {
                lat: -8.796208,
                lng: 115.226374
            },
            type: "venue",
        },
        {
            title: 'Bali International Convention Center',
            latLng: {
                lat: -8.795824,
                lng: 115.229587
            },
            type: "venue",
        },
        {
            title: 'Westin Resort Nusa Dua',
            latLng: {
                lat: -8.795782,
                lng: 115.230536
            },
            type: "venue",

        },
        {
            title: 'Grand Whiz Hotel',
            latLng: {
                lat: -8.792171,
                lng: 115.227744
            },
            type: "venue",
        },

    ]
    var map;
    function initMap() {
        var nusaDuaConventionCenter = {
            lat: -8.796208,
            lng: 115.226374
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: nusaDuaConventionCenter,
            zoom: 17,
            disableDefaultUI: true,
        });

        map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(document.getElementById('navbar-menu'))
        locations.forEach(function (each) {
            var marker = new google.maps.Marker({
                position: each.latLng,
                map: map,
                label: LabelTypes[each.type],
                title: each.title
            });
        });

        var noPoi = [
            {
                featureType: "poi",
                stylers: [
                    {visibility: "off"}
                ]
            }
        ];

        map.setOptions({styles: noPoi});

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvacqx3oxY37xNjmKVcCY-2zK73f38T5A&callback=initMap"
        async defer></script>
</body>
</html>