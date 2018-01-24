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
                'label' => 'Tourism Package',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <div class="content">
        <div id="tour_slideshow">
            <div class="owl-carousel gl"
                data-items="1"
                data-nav = "true"
                data-loop="true"
                data-autoplay="true"
                data-autoplay-timeout="3000"
                data-autoplay-hover-pause="true"
                data-sizes="[
                [ 0, 1 ],
                [ 321, 1 ],
                [ 481, 2 ],
                [ 641, 3 ],
                [ 721, 3 ],
                [ 841, 3 ],
                [ 1041 , 3 ],
                [ 1220, 3 ]]"
            >
            @foreach( $packages['images'] as $sim )
                <div class="owl-item link-img" style="text-align: center;">
                    @if( !empty( $sim ))
                        <img src="{{ $sim }}">
                    @else
                        {!! html_img( 'img/am2018/public/default-tourism-photo.jpg',
                        [
                            'w' => '762',
                            'h' => '430'
                        ]) !!}
                    @endif
                </div>
            @endforeach
            </div>
        </div>

        @php $avails = $bookings[ 'children'] @endphp
        <div id="tour_company_name">
            <div class="tch-left">
                {{ $packages['name'] }}
            </div>
            @if( !empty( $avails ) )
<!--             <div class="tch-right">
                <div class="for-label">Start From</div>
                <div class="for-price">IDR </div>
            </div> -->
            @endif
        </div>

        <form method="GET" action="">
            <div class="tourism-filters-background" style="background-image:url('../../../../img/am2018/public/colorful-filters.png');">
                <div class="tourism-filters-box">
                    <div class="tourism-filters datepicker">
                        <div class="tf-label">Date</div>
                        <input type="text" name="date" class="am-datepicker tf-datepicker" value="{{ $date }}">
                    </div>

                    <div class="tourism-filters select">
                        <div class="tf-label">Adult (Age 12 - 60)</div>
                        <select name="adult" class="tf-select">
                            @for($i=1; $i< 31; $i++)
                                <option value="{{ $i }}" @if( $adult == $i ) selected="selected" @endif>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="tourism-filters button no-mr">
                        <input type="submit" value="Check Availability" class="tf-button">
                    </div>
                </div>
            </div>
        </form>
        <ul id="tour_bookings">
        @if( !empty($avails) )
        @foreach( $avails as $book)
            @if( !empty( $book['availabilities'] ))
            <li>
                <div class="tb-container">
                    <div class="tb-box f-left">
                        <div class="tb-label day">{{ date('d F Y', strtotime($book['availabilities'][0]['start_date'])) }}</div>
    <!--                     <div class="tb-label price">
                            IDR {{ number_format($book['availabilities'][0]['price']) }}
                        </div> -->
                        <div class="tb-label">
                            {{ $book['name']}}
                        </div>
                    </div>
                    <div class="tb-box f-right">
                        <a class="tb-button-check" style="background-image: url({{asset('img/am2018/public/colorful-line.png')}});" href="{{ $book['availabilities']['0']['book_uri'] }}" target="_blank">
                            <span style="color:white;">Check Package</span>
                        </a>
                    </div>
                </div>
                <div class="tb-description">
                    @if( !empty( $book['description'] ))
                        {{ $book['description'] }}
                    @else
                        {{ $book['short_description'] }}
                    @endif
                </div>
                <div class="tb-box mobile f-right">
                    <a class="tb-button-check" style="background-image: url({{asset('img/am2018/public/colorful-line.png')}});" href="{{ $book['availabilities']['0']['book_uri'] }}" target="_blank">
                        <span style="color:white;">Check Package</span>
                    </a>
                </div>
            </li>
            @endif
        @endforeach
        @else
            <li>
                <div class="warn-no-package">
                    No Package Available.
                </div>
            </li>
        @endif
        </ul>
    </div>

<!--     <div class="mix-bar-full mb-top"></div>
    <div>
        <ul id="tour_bookings">
        @foreach( $packages['children'] as $child)
            @php $slug = str_slug( $child['name']) @endphp
            @php $link = route( 'f.discovers.tourism_detail', [ $location, $slug ]); @endphp
            @if( !empty( $date ) and !empty( $adult ))
                @php $link = route( 'f.discovers.tourism_detail', [ $location, $slug, "date=$date", "adult=$adult" ]); @endphp
            @endif

            <li>
                <div class="tb-box f-left">
                    <div class="tb-label">
                        {{ $child['name'] }}
                    </div>
                </div>
                <div class="tb-box f-right" style="margin:0;">
                    <a href="{{ $link }}" target="_blank">
                        <span>Check Package</span>
                    </a>
                </div>
            </li>
        @endforeach
        </ul>
    </div> -->

    @if( !empty( $packages['description']))
    <div class="mix-bar-full mb-top"></div>
    <p class="tour-description">
        {!!nl2br($packages['description']) !!}
    </p>
    @else
        @if( !empty( $packages['short_description'] ))
            <div class="mix-bar-full mb-top"></div>
            <p class="tour-description">
                {!!nl2br($packages['short_description']) !!}
            </p>
        @endif
    @endif

    <div class="mix-bar-full no-mb mb-top"></div>
    <div id="tour_company_info">
        <div class="tci-description">For further information and reservation :</div>
        <div class="tci-row">
            <span class="colorful-icon user"></span>
            <div class="tci-value">
                <div class="company-name">{{ $packages['merchant']['name'] }}</div>
                <div>{{ $packages['merchant']['address'][0] }}</div>
            </div>
        </div>
        <div class="tci-row">
            <span class="colorful-icon phone"></span>
            <div class="tci-value">
                {{ $packages['merchant']['phone']['country_code'] }} {{ $packages['merchant']['phone']['number'] }}
            </div>
        </div>
        <div class="tci-row">
            <span class="colorful-icon email"></span>
            <div class="tci-value">
                {{ $packages['merchant']['email'] }}
            </div>
        </div>
        @if(!empty($packages['merchant']['website']))
        <div class="tci-row no-pb">
            <span class="colorful-icon website"></span>
            <div class="tci-value">
                {{ $packages['merchant']['website'] }}
            </div>
        </div>
        @endif
    </div>
    <div class="mix-bar-full no-mb"></div>

    <div class="similiar-title">Similiar Packages</div>
    <div class="owl-carousel gl"
        data-items="3"
        data-nav = "true"
        data-pad = "true"
        data-loop="true"
        data-autoplay="true"
        data-autoplay-timeout="3000"
        data-autoplay-hover-pause="true"
        data-sizes="[
        [ 0, 1 ],
        [ 321, 1 ],
        [ 481, 2 ],
        [ 641, 3 ],
        [ 721, 3 ],
        [ 841, 3 ],
        [ 1041 , 3 ],
        [ 1220, 3 ]]"
    >
    @foreach( $similars as $slug=>$sim )
        <a href="{{ route( 'f.discovers.tourism_detail', [ $location, str_slug($sim['name']) ]) }}">
            <div class="owl-item link-img" style="text-align: center;">
                @if( !empty( $sim['images']->first() ))
                    <img src="{{ $sim['images']->first() }}" width="181" height="181">
                @else
                    {!! html_img( 'img/am2018/public/default-tourism-photo.jpg',
                    [
                        'w' => '181',
                        'h' => '181',
                    ]) !!}
                @endif
                <div class="caption text-center">
                    <h4 class="subtitle">{{ $sim['name'] }}</h4>
                    <p class="subtext">
                        <!-- none -->
                    </p>
                </div>
            </div>
        </a>
    @endforeach
    </div>
    <div class="mix-bar-full no-mb"></div>
    <div id="tour_company_info">
        <div class="disclaimer">Disclaimer tourism packages:</div>
        <div class="tci-description"><p>The information contained in this website is for information purposes only. Through this website you are able to link to other websites which are under the responsibility of the operators. Any purchases made through those sites are borne by the operators. Indonesia Planning Team has no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the contents.</p></div>
    </div>
</section>

@stop
