@extends( 'discovers._layout' )

@section( 'head_page_css' )
    @parent
    {!! html_css( 'discover-indonesia.css', 'css/fo' ) !!}
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
                'label' => 'Wonderful Indonesia', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <div class="content">



        <div class="mix-color-title mb-50">
            <span class="mix-color-bar left" style="width:170px;margin-top:23px;"></span>
            <span class="mct-row fm-signika-reg sm-font">
                Wonderful Indonesia
            </span>
            <span class="mix-color-bar right" style="width:170px;margin-top:23px;"></span>
        </div>
        
        <p class="fm-helvetica">
            Indonesia has various natural wonders that you can explore. Bali, known as the Island of God, 
            is a great destination for your family trip with its alluring beaches and dramatic dances. Explore further to the islands around 
            and meet the real life dragons at the Komodo Island or to visit divine hidden beaches and marine life at Lombok Island.
            If you want to learn and live as locals, Yogyakarta as the cradle of civilization on Java and Tana Toraja with its traditional
            culture in the highland can be your next destinaton with its unique culture and traditions. Lake Toba is a perfect place to
            relax and living in the moment to escape all of the city hustle in your daily life. Discover your adventure and choose one of
            your favourite destination now!
        </p>

        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title set-background height-big" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/wonderful-indonesia/explore-bali.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle yellow"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/follow-the-holiday-of-the-obamas-plan-your-ultimate-bali-family-trip">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/wonderful-indonesia/obama-in-bali.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/follow-the-holiday-of-the-obamas-plan-your-ultimate-bali-family-trip" class="fi-label">
                                        FOLLOW THE HOLIDAY OF THE OBAMAS: PLAN YOUR ULTIMATE BALI FAMILY TRIP
                                    </a>
                                    <div class="fi-desc">
                                        follow in the footsteps of Obama and experience the same attractions where Barack Obama, Michelle and daughters Malia
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/follow-the-holiday-of-the-obamas-plan-your-ultimate-bali-family-trip" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background height-big" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/wonderful-indonesia/explore-lombok.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle dark-blue"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/follow-the-action-on-gili-trawangan">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/wonderful-indonesia/lombok-sea.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/follow-the-action-on-gili-trawangan" class="fi-label">
                                        FOLLOW THE ACTION ON GILI TRAWANGAN
                                    </a>
                                    <div class="fi-desc">
                                        While every year millions of tourists are attracted to Bali, the nighboring island of Lombok offers 3 tiny paradise islands off its north-west coast, known as “the Gilis”
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/follow-the-action-on-gili-trawangan" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background height-big" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/wonderful-indonesia/explore-yogyakarta.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle yellow"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/explore-yogyakarta-and-central-java-obama-style">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/wonderful-indonesia/obama-in-yogyakarta.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/explore-yogyakarta-and-central-java-obama-style" class="fi-label">
                                        EXPLORE YOGYAKARTA & CENTRAL JAVA – OBAMA STYLE!
                                    </a>
                                    <div class="fi-desc">
                                        Following in the footsteps of the Obamas, the choice of attractions and places they visited revealed
                                        the deep interest 
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/explore-yogyakarta-and-central-java-obama-style" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background height-big" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/wonderful-indonesia/explore-komodo-island.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle dark-blue"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/10-reasons-to-visit-the-magnificent-komodo-national-park">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/wonderful-indonesia/komodo.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/10-reasons-to-visit-the-magnificent-komodo-national-park" class="fi-label">
                                        10 REASONS TO VISIT THE MAGNIFICENT KOMODO NATIONAL PARK
                                    </a>
                                    <div class="fi-desc">
                                        In 1986, the park was declared a World Heritage Site and a Man and Biosphere Reserve by UNESCO.
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/10-reasons-to-visit-the-magnificent-komodo-national-park" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background height-big" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/wonderful-indonesia/explore-toraja.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle yellow"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/where-to-stay-in-tana-toraja-highlands-in-south-sulawesi">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/wonderful-indonesia/toraja-house.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a target="_blank" href="http://www.indonesia.travel/en/post/where-to-stay-in-tana-toraja-highlands-in-south-sulawesi" class="fi-label">
                                        WHERE TO STAY IN TANA TORAJA HIGHLANDS IN SOUTH SULAWESI
                                    </a>
                                    <div class="fi-desc">
                                        Tana Toraja is located in the norhtern highlands of South Sulawesi province. It is home to an indigenous population
                                     </div>
                                    <a target="_blank" href="http://www.indonesia.travel/en/post/where-to-stay-in-tana-toraja-highlands-in-south-sulawesi" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                </li>

                                <li>
                    <div class="title set-background height-big" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/wonderful-indonesia/explore-lake-toba.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle blue"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                <a target="_blank" href="http://www.indonesia.travel/en/post/tomok-and-simanindo-the-traditional-batak-villages-in-lake-toba">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/wonderful-indonesia/batak-village.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a target="_blank" href="http://www.indonesia.travel/en/post/tomok-and-simanindo-the-traditional-batak-villages-in-lake-toba" class="fi-label">
                                        TOMOK AND SIMANINDO: THE TRADITIONAL BATAK VILLAGES IN LAKE TOBA
                                    </a>
                                    <div class="fi-desc">
                                        The Batak ethnic group inhabiting the intererior of North Sumatra is devided into six sub-groups. They are the Toba, Karo,
                                     </div>
                                    <a target="_blank" href="http://www.indonesia.travel/en/post/tomok-and-simanindo-the-traditional-batak-villages-in-lake-toba" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                </li>

            </ul>
            <!--end of accordion-->
        </section>
    </div>
</section>

@stop
