@extends('structure')
@section('content')

<section class="page-title page-title-4 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="uppercase mb0">About IMF</h3>
            </div>
            <div class="col-md-6 text-right">
                <ol class="breadcrumb breadcrumb-2">
                    <li>
                        <a href="{{ URL::to('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li class="active">IMF</li>
                </ol>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@include('parallax')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb16">IMF</h2>
                <p class = "mb0">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section class="image-square left">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/small1.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <h3>Build a slick, modern site faster than ever before.</h3>
        <p class="mb0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
        </p>
    </div>
</section>

<section class="image-square right">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/small2.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 content">
        <h3>Build a slick, modern site faster than ever before.</h3>
        <p class="mb0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
        </p>
    </div>
</section>

<section class="image-square left">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/small1.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <h3>Build a slick, modern site faster than ever before.</h3>
        <p class="mb0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
        </p>
    </div>
</section>

<section class="image-square right">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/small2.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 content">
        <h3>Build a slick, modern site faster than ever before.</h3>
        <p class="mb0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
        </p>
    </div>
</section>

@stop