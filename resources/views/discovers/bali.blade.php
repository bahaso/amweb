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
                                <a href="http://www.indonesia.travel/en/post/5-amazing-things-in-bali-to-indulge-your-senses">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/5-amazing-things-in-bali-to-indulge-your-senses" class="fi-label">5 AMAZING THINGS IN BALI TO INDULGE YOUR SENSES</a>
                                    <div class="fi-desc">As the ultimate vacation island in Indonesia, Bali will definitely pamper you with everything that will 
                                        indulge your every sense.
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/5-amazing-things-in-bali-to-indulge-your-senses" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/destination/point-of-interest/seminyak-restaurants">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/sensory-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/seminyak-restaurants" class="fi-label">SEMINYAK, THE WORLD-CLASS DINING SCENE</a>
                                    <div class="fi-desc">
                                        An essential part of the swathes of stunning beaches along the south coast of Bali next to the vibrant ambience of Kuta.
                                     </div>
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/seminyak-restaurants" class="fi-link">Read More >></a>
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
                        <div class="faq-triangle dark-purple"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="http://www.indonesia.travel/en/post/5-restaurants-in-bali-that-make-your-dinner-experience-magical">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/modern-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/5-restaurants-in-bali-that-make-your-dinner-experience-magical" class="fi-label">5 RESTAURANTS IN BALI THAT MAKE YOUR DINNER EXPERIENCE MAGICAL</a>
                                    <div class="fi-desc">
                                        It is no mystery that Bali is home to some captivating and awe-inspiring panoramic views. This magical island is rich in..
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/5-restaurants-in-bali-that-make-your-dinner-experience-magical" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/destination/point-of-interest/seminyak-fashion-boutiques-and-outlets">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/modern-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/seminyak-fashion-boutiques-and-outlets" class="fi-label">EXPLORING EXCLUSIVE FASHION BOUTIQUES AND OUTLETS IN SEMINYAK</a>
                                    <div class="fi-desc">
                                       Amidst the many restaurants and cafes, the Seminyak's shopping scene comprising exclusive fashion boutiques and..
                                     </div>
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/seminyak-fashion-boutiques-and-outlets" class="fi-link">Read More >></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/bali/natural-wonders.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle blue"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="http://www.indonesia.travel/en/post/6-secluded-white-beaches-invite-you-to-the-enchanting-island-of-bali">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/natural-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/6-secluded-white-beaches-invite-you-to-the-enchanting-island-of-bali" class="fi-label">6 SECLUDED WHITE BEACHES INVITE YOU TO THE ENCHANTING ISLAND OF BALI</a>
                                    <div class="fi-desc">
                                        Whether it is for their sand, sun, surf and amazing snorkeling, or merely for their serene ambience, the beaches on the
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/6-secluded-white-beaches-invite-you-to-the-enchanting-island-of-bali" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/bali-s-newly-popular-beaches-and-marine-attractions">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/natural-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/bali-s-newly-popular-beaches-and-marine-attractions" class="fi-label">BALI’S NEWLY POPULAR BEACHES AND MARINE ATTRACTIONS</a>
                                    <div class="fi-desc">
                                        The ever enchanting island of Bali and all her fascinating natural splendors never fail to offer something for everyone. Whether it
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/bali-s-newly-popular-beaches-and-marine-attractions" class="fi-link">Read More >></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/bali/cultural-wonders.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle yellow"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="http://www.indonesia.travel/en/destination/point-of-interest/the-holy-springs-of-tirta-empul">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/cultural-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/the-holy-springs-of-tirta-empul" class="fi-label">THE HOLY SPRINGS OF TIRTA EMPUL: BALI’S SACRED POOL OF PURIFICATION</a>
                                    <div class="fi-desc">
                                        For over a thousand years, Balinese Hindu worshipers have been drawn to Pura Tirta Empul (Holy Water Temple), whose sacred
                                     </div>
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/the-holy-springs-of-tirta-empul" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/destination/point-of-interest/the-barong-and-the-kris-dance">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/cultural-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/the-barong-and-the-kris-dance" class="fi-label">
                                        THE BARONG AND THE KRIS DANCE: THE ETERNAL BATTLE BETWEEN GOOD & EVIL
                                    </a>
                                    <div class="fi-desc">
                                        The wondrous island of Bali is not only blessed with fascinating beaches and outstanding landscapes, it also has an amazing
                                     </div>
                                    <a href="http://www.indonesia.travel/en/destination/point-of-interest/the-barong-and-the-kris-dance" class="fi-link">Read More >></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class="title set-background" 
                        style="background-image:url('../img/am2018/public/discover-indonesia/bali/adventurous-wonders.jpg');">
                    </div>
                    <div class="content">
                        <div class="faq-triangle orange"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="http://www.indonesia.travel/en/post/bali-s-adrenaline-pumping-water-sports">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/adventurous-1.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/bali-s-adrenaline-pumping-water-sports" class="fi-label">BALI'S ADRENALINE PUMPING WATER SPORTS</a>
                                    <div class="fi-desc">
                                        There is no limit to how much fun you can have when you are on vacation in the tropical paradise called Bali. Often dubbed as the
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/bali-s-adrenaline-pumping-water-sports" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                            <div class="fi-container no-mb">
                                <a href="http://www.indonesia.travel/en/post/5-reasons-travelers-love-white-water-rafting-at-ayung-river-in-ubud">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/adventurous-2.jpg',
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                <div class="fi-box">
                                    <a href="http://www.indonesia.travel/en/post/5-reasons-travelers-love-white-water-rafting-at-ayung-river-in-ubud" class="fi-label">
                                        5 REASONS TRAVELERS LOVE WHITE WATERRAFTING AT AYUNG RIVER IN UBUD
                                    </a>
                                    <div class="fi-desc">
                                        What is the best thing you love about Bali? Most tourists would say it’s the beaches. But Bali offers a whole lot more, with
                                     </div>
                                    <a href="http://www.indonesia.travel/en/post/5-reasons-travelers-love-white-water-rafting-at-ayung-river-in-ubud" class="fi-link">Read More >></a>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </li>


            </ul>
            <!--end of accordion-->
        </section>

        <div class="content no-padding">

            <div class="mix-bar-full no-mb"></div>
            <div class="faq-title-link">
                <h4 class="ftl-title">Food in Bali</h4>
                <a href="http://www.indonesia.travel/en" class="ftl-link">More >></a>
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

            {{--<div class="faq-title-link">
                <h4 class="ftl-title">Hotel & Resorts</h4>
                <a href="http://www.indonesia.travel/en/post/bali-s-unique-hotel-resorts" class="ftl-link">More >></a>
            </div>

            <div class="fi-container">
                {!! html_img( 'img/am2018/public/discover-indonesia/bali/four-season-Resort.jpg',
                [
                    'w' => '211',
                    'h' => '211',
                    'class' => 'fi-image'
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
                    'class' => 'fi-image'
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
            </div>--}}


            <div class="mix-bar-full no-mb"></div>

            {!! html_img( 'img/am2018/public/discover-indonesia/explore-indonesia.jpg',
            [
                'w' => '100%',
                'h' => 'auto',
                'style' => 'margin-top:60px;'
            ]) !!}

        </div>

    </div>
</section>

@stop