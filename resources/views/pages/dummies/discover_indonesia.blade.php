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
                'label' => 'Bali', 
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
                Bali (Land of the Gods)
            </span>
            <span class="mix-color-bar right" style="width:170px;margin-top:23px;"></span>
        </div>
        <p class="no-mb">
            {!! html_img( 'img/am2018/public/discover-indonesia/bali/bali-location.png',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <div class="info-split-column">
            <div class="sc-col">
                <div class="sc-label big">Population</div>
                <div class="sc-value big">263,645,474</div>
            </div>
            <div class="sc-col right">
                <div class="sc-label big">Area</div>
                <div class="sc-value big">1,812,108 Km2</div>
            </div>
            <div class="sc-col heighten">
                <div class="sc-label">Languages</div>
                <div class="sc-value">Bahasa Indonesia</div>
            </div>
            <div class="sc-col right">
                <div class="sc-label">Religion</div>
                <div class="sc-value">
                    Islam, Protestantism, Catholicism, Hinduism, Buddhism and Confucianism
                </div>
            </div>
            <div class="sc-col">
                <div class="sc-label">Government    </div>
                <div class="sc-value">Constitutional Republic</div>
            </div>
            <div class="sc-col right">
                <div class="sc-label">Currency</div>
                <div class="sc-value">
                    (Rp) Indonesian Rupiah
                </div>
            </div>
        </div>

        <div class="mix-bar-full"></div>
        
        <p class="fm-helvetica">
            Bali, known as The Land of Gods, has natural beauties of the serene terraced rice fields and looming mighty volcanoes.
             From intricately carved temples, dramatic dances, colorful ceremonies, uniques arts and crafts, up to the luxurious beach 
             resorts and unforgettable nightlife are just a few things that you can easily find in Bali.
        </p>

        <div class="mix-bar-full no-mb"></div>

        <div class="faq-title-link">
            <h4 class="ftl-title">Things to do in Bali</h4>
        </div>
        
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title set-background" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/bali/sensory-wonders.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle purple"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="#">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="#" class="fi-label">5 AMAZING THINGS IN BALI TO INDULGE YOUR SENSES</a>
                                    <div class="fi-desc">As the ultimate vacation island in Indonesia, Bali will definitely pamper you with everything that will 
                                        indulge your every sense.
                                     </div>
                                    <a href="#" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="#">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="#" class="fi-label">SEMINYAK, THE WORLD-CLASS DINING SCENE</a>
                                    <div class="fi-desc">
                                        An essential part of the swathes of stunning beaches along the south coast of Bali next to the vibrant ambience of Kuta.
                                     </div>
                                    <a href="#" class="fi-link">Read More >></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/bali/modern-wonders.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle purple"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="#">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/modern-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="#" class="fi-label">5 RESTAURANTS IN BALI THAT MAKE YOUR DINNER EXPERIENCE MAGICAL</a>
                                    <div class="fi-desc">
                                        It is no mystery that Bali is home to some captivating and awe-inspiring panoramic views. This magical island is rich in..
                                     </div>
                                    <a href="#" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="#">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/modern-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="#" class="fi-label">EXPLORING EXCLUSIVE FASHION BOUTIQUES AND OUTLETS IN SEMINYAK</a>
                                    <div class="fi-desc">
                                       Amidst the many restaurants and cafes, the Seminyak's shopping scene comprising exclusive fashion boutiques and..
                                     </div>
                                    <a href="#" class="fi-link">Read More >></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </li>

<!--                 <li>
                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-wonders.jpg',
                    [
                        'w' => '100%',
                        'h' => 'auto',
                        'class' => 'title'
                    ]) !!}
                    <div class="content">
                        <div class="fi-container">
                            {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-1.jpg',
                            [
                                'w' => '181',
                                'h' => '181',
                            ]) !!}
                            <div class="fi-box">
                                <div class="fi-label">5 AMAZING THINGS IN BALI TO INDULGE YOUR SENSES</div>
                                <div class="fi-desc">As the ultimate vacation island in Indonesia, Bali will definitely pamper you with everything that will 
                                    indulge your every sense.
                                 </div>
                                <div class="fi-link">Read More >></div>
                            </div>
                        </div> 
                        <div class="fi-container no-mb">
                            {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-2.jpg',
                            [
                                'w' => '181',
                                'h' => '181',
                            ]) !!}
                            <div class="fi-box">
                                <div class="fi-label">5 AMAZING THINGS IN BALI TO INDULGE YOUR SENSES</div>
                                <div class="fi-desc">As the ultimate vacation island in Indonesia, Bali will definitely pamper you with everything that will 
                                    indulge your every sense.
                                 </div>
                                <div class="fi-link">Read More >></div>
                            </div>
                        </div>                            
                    </div>
                </li> -->
                <li>
                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-wonders.jpg',
                    [
                        'w' => '100%',
                        'h' => 'auto',
                        'class' => 'title'
                    ]) !!}
                    <div class="content no-padding">
                        <div class="fi-container">
                            {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-1.jpg',
                            [
                                'w' => '181',
                                'h' => '181',
                            ]) !!}
                            <div class="fi-box">
                                <div class="fi-label">5 AMAZING THINGS IN BALI TO INDULGE YOUR SENSES</div>
                                <div class="fi-desc">As the ultimate vacation island in Indonesia, Bali will definitely pamper you with everything that will 
                                    indulge your every sense.
                                 </div>
                                <div class="fi-link">Read More >></div>
                            </div>
                        </div> 
                        <div class="fi-container">
                            {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-2.jpg',
                            [
                                'w' => '181',
                                'h' => '181',
                            ]) !!}
                            <div class="fi-box">
                                <div class="fi-label">5 AMAZING THINGS IN BALI TO INDULGE YOUR SENSES</div>
                                <div class="fi-desc">As the ultimate vacation island in Indonesia, Bali will definitely pamper you with everything that will 
                                    indulge your every sense.
                                 </div>
                                <div class="fi-link">Read More >></div>
                            </div>
                        </div>    

                        <div class="mix-bar-full no-mb"></div>
                        <div class="faq-title-link">
                            <h4 class="ftl-title">Food in Bali</h4>
                            <span class="ftl-link">More >></span>
                        </div>
                        <div class="faq-split">
                            <div class="fs-box left">
                                {!! html_img( 'img/am2018/public/discover-indonesia/bali/sate-lilit.jpg',
                                [
                                    'w' => '400',
                                    'h' => '243',
                                ]) !!}
                                <div class="fs-container">
                                    <h5 class="fs-title">Sate Lilit</h5>
                                    <p>
                                        Wrapped around a skewer of lemongrass and made from minced meat with lime juice, coconut milk,
                                         shreded coconut, and shallots, this grilled signature dish of Bali is something you should not miss!
                                    </p>
                                </div>
                            </div>

                            <div class="fs-box right">
                                {!! html_img( 'img/am2018/public/discover-indonesia/bali/ayam-betutu.jpg',
                                [
                                    'w' => '400',
                                    'h' => '243',
                                ]) !!}
                                <div class="fs-container">
                                    <h5 class="fs-title">Ayam Betutu</h5>
                                    <p>
                                        Cooked and wrapped in banana leaf for 24 hours straight, Ayam Betutu offers rich flavour that you should not miss!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mix-bar-full no-mb"></div>

                        <div class="faq-title-link">
                            <h4 class="ftl-title">Hotel & Resorts</h4>
                            <span class="ftl-link">More >></span>
                        </div>

                        <div class="fi-container">
                            {!! html_img( 'img/am2018/public/discover-indonesia/bali/four-season-Resort.jpg',
                            [
                                'w' => '211',
                                'h' => '211',
                            ]) !!}
                            <div class="fi-box info">
                                <div class="fi-label">Four Seasons Resort Bali Sayan</div>
                                <div class="fi-desc info">
                                    Stay at the resort in the middle of breathtaking rainforest by the Ayung River in Ubud to rejuvenate your soul.
                                 </div>
                                 <div class="fi-info">
                                     <span class="icons marker"></span>
                                     <span>
                                         Jl. Raya Sayan, Ubud, Sayan Ubud, Bali 80571
                                     </span>
                                 </div>
                                  <div class="fi-info">
                                     <span class="icons telephone"></span>
                                     <span>
                                         (0361) 977577
                                     </span>
                                 </div>
                                  <div class="fi-info">
                                     <span class="icons globe"></span>
                                     <span>
                                         fourseasons.com
                                     </span>
                                 </div>
                            </div>
                        </div>

                        <div class="fi-container">
                            {!! html_img( 'img/am2018/public/discover-indonesia/bali/sandat-gampling-tent.jpg',
                            [
                                'w' => '211',
                                'h' => '211',
                            ]) !!}
                            <div class="fi-box info">
                                <div class="fi-label">Four Seasons Resort Bali Sayan</div>
                                <div class="fi-desc info">
                                    Stay at the resort in the middle of breathtaking rainforest by the Ayung River in Ubud to rejuvenate your soul.
                                 </div>
                                 <div class="fi-info">
                                     <span class="icons marker"></span>
                                     <span>
                                         Jl. Raya Sayan, Ubud, Sayan Ubud, Bali 80571
                                     </span>
                                 </div>
                                  <div class="fi-info">
                                     <span class="icons telephone"></span>
                                     <span>
                                         (0361) 977577
                                     </span>
                                 </div>
                                  <div class="fi-info">
                                     <span class="icons globe"></span>
                                     <span>
                                         fourseasons.com
                                     </span>
                                 </div>
                            </div>
                        </div>


                        <div class="mix-bar-full no-mb"></div>

                        {!! html_img( 'img/am2018/public/discover-indonesia/explore-indonesia.jpg',
                        [
                            'w' => '100%',
                            'h' => 'auto',
                            'style' => 'margin-top:60px;'
                        ]) !!}

                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>



    </div>
</section>

@stop