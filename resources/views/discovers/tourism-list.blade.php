@extends( 'discovers._layout' )

@section( 'head_page_css' )
	@parent
	{!! html_css( 'carousel-3-images.css', 'css/fo' ) !!}
@stop

@section( 'head_vendor_css' )
    @parent
    {!! html_css( 'owl.carousel/dist/assets/owl.carousel.min.css', 'vendor' ) !!}
    {!! html_css( 'zebra_datepicker/dist/css/default/zebra_datepicker.min.css', 'vendor' ) !!}
@stop

@section( 'foot_vendor_js' )
    @parent
    {!! html_js( 'owl.carousel/dist/owl.carousel.min.js', 'vendor' ) !!}
    {!! html_js( 'zebra_datepicker/dist/zebra_datepicker.min.js', 'vendor' ) !!}
@stop

@section( 'foot_page_js' )
    @parent
    {!! html_js( 'owl-carousel.js' ) !!}
@stop

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' =>
        [
            [
                'label' => 'Discover Indonesia',
                'url' => route( 'f.discovers.indonesia' )
            ],
            [
                'label' => 'Tourism List',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">

    <div class="content">

        <div class="mix-color-title mb-35">
            <span class="mix-color-bar mobile-full"></span>
            <span class="mix-color-bar left"></span>
            <span class="mct-row fm-signika-reg sm-font">
                Tourism - {{ $location }}
            </span>
            <span class="mix-color-bar right"></span>
            <span class="mix-color-bar mobile-full"></span>
        </div>

        <form method="GET" action="">
            <div class="tourism-filters-background" style="background-image:url('../../../img/am2018/public/colorful-filters.png');">
                <div class="tourism-filters-box">
                    <div class="tourism-filters datepicker">
                        <div class="tf-label">Date</div>
                        <input type="text" name="date" class="am-datepicker tf-datepicker" value="{{ $date }}">
                    </div>

                    <div class="tourism-filters select">
                        <div class="tf-label">Adult (Age 12 - 60)</div>
                        <select name="adult" class="tf-select">
                            @for($i=1; $i< 31; $i++)
                                <option value="{{ $i }}" @if( $adult == $i ) selected="selected" @endif >{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="tourism-filters button no-mr">
                        <input type="submit" value="Check Availability" class="tf-button">
                    </div>
                </div>
            </div>

            @if( !empty($packages))
            <div id="tour_list_sorting">
                <div class="tls-box t-title">
                    <div class="tls-label">Sort By:</div>
                </div>
                <div class="tls-box t-select">
                    <!-- <div class="tls-label">Price</div> -->
                    <select name="sort_name" class="tls-select">
                        <option value="Name" @if($sort_name == 'Name')selected="selected"@endif> Name </option>
                        <!-- <option value="Price" @if($sort_name == 'Price')selected="selected"@endif> Price </option> -->
                    </select>
                </div>

                <div class="tls-box t-select">
                    <!-- <div class="tls-label">Name</div> -->
                    <select name="sort_order" class="tls-select">
                        <option value="Ascending" @if($sort_order == 'Ascending')selected="selected"@endif>Ascending</option>
                        <option value="Descending" @if($sort_order == 'Descending')selected="selected"@endif>Descending</option>
                    </select>
                </div>
                <div class="tls-box t-button">
                        <input type="submit" value="Sort" class="input-sorting">
                </div>
            </div>
            @endif
        </form>

        <div class="mix-bar-full no-mb"></div>

        <ul class="tourism-information">
        @if( !empty($packages) )
            @foreach( $packages as $slug=>$pk )

				@php $link = route( 'f.discovers.tourism_detail', [ $location, $slug ]); @endphp
				@if( !empty( $date ) and !empty( $adult ))
					@php $link = route( 'f.discovers.tourism_detail', [ $location, $slug, "date=$date", "adult=$adult" ]); @endphp
				@endif

            <li>
                <div class="tour-container">
                    <a href="{{ $link }}">
                        @if( !empty( $pk['images']->first() ))
                            <img src="http://book.itx.co.id{{ $pk[ 'images' ]->first() }}" class="tour-image" width="181" height="181">
                        @else
                            {!! html_img( 'img/am2018/public/default-tourism-photo.jpg',
                            [
                                'w' => '181',
                                'h' => '181',
                                'class' => 'tour-image'
                            ]) !!}
                        @endif
                    </a>
                    <div class="tour-box">

                        <a href="{{ $link }}" class="tour-label">{{ $pk['name'] }}</a>
                        <div class="tour-desc">
                        @if( strlen($pk['description']) > 170 )
                            {{ substr($pk['description'], 0, 170) }}..
                        @else
                            {{ $pk['description'] }}
                        @endif
                        </div>
                        <div class="tour-infos">
                            <div class="tour-company">
                                <!-- <div class="c-label">IDR {{ number_format($pk['availabilities'][0]['price']) }} - return (lunch included)</div> -->
                                <div class="c-name">
                                    {{--{{ $pk['merchant']['name'] }}--}}
                                </div>
                            </div>
                            <a href="{{ $link }}" class="tour-btn">
                                {!! html_img( 'img/am2018/public/colorful-button.png',
                                [
                                    'w' => '118',
                                    'h' => '40',
                                ]) !!}
                                <span class="colorful-label">More Info</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tourism-mobile">
                    <a href="{{ route( 'f.discovers.tourism_detail', [ $location, $slug ]) }}" class="tour-btn">
                        {!! html_img( 'img/am2018/public/colorful-button.png',
                        [
                            'w' => '118',
                            'h' => '40',
                        ]) !!}
                    </a>
                    <span class="tm-label">More Info</span>
                </div>
            </li>
            @endforeach
        @else
            <div class="warn-no-package">No Packages Available</div>
            <div class="mix-bar-full no-mb"></div>
        @endif
        </ul>
            <!--end of accordion-->
    </div>
</section>

@stop
