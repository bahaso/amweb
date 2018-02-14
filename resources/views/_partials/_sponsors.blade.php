<section id="st_sponsors" class="{{ $class or '' }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="uppercase title">Organizing Institutions</h3>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="logo-carousel">
                
                <div class="flex-viewport">
                    <ul class="slides">
                        @foreach( $sponsors as $s )
                        <li>
                            @if( $sponsor_img[$s->id] )
                            <a target="_blank" href="{{ $s->link_url }}">
                                {!! html_img( $sponsor_img[$s->id]->original(), 
                                    [ 'alt' => $s->title ]
                                ) 
                                !!}
                            </a>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                <!--end of logo slider-->
                </div>
            </div>
            <!--end of row-->
        </div>
    <!--end of container-->
    </div>
</section>
