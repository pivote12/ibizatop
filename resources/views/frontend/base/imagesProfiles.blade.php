<section class="section white">
    <div class="container">
        <div class="row">


            @if( !empty($profileSpanish->images->url1) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                    <?php $tama�o = getimagesize($profileSpanish->images->url1); $w = $tama�o[0]; $h =$tama�o[1] ?>
                        @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif

                            <img src="/{{ $profileSpanish->images->url1 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link" href="/{{ $profileSpanish->images->url1 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url2) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                    <?php $tama�o = getimagesize($profileSpanish->images->url2); $w = $tama�o[0]; $h =$tama�o[1] ?>
                         @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url2 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link" href="/{{ $profileSpanish->images->url2 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url3) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                         <?php $tama�o = getimagesize($profileSpanish->images->url3); $w = $tama�o[0]; $h =$tama�o[1] ?>
                         @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url3 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link" href="/{{ $profileSpanish->images->url3 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url4) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                         <?php $tama�o = getimagesize($profileSpanish->images->url4); $w = $tama�o[0]; $h =$tama�o[1] ?>
                          @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url4 }}" class="" alt="">

                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link" href="/{{ $profileSpanish->images->url4 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif
        </div><!-- end row -->
        <div class="row">


            @if( !empty($profileSpanish->images->url5) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                         <?php $tama�o = getimagesize($profileSpanish->images->url5); $w = $tama�o[0]; $h =$tama�o[1] ?>
                        @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url5 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link"  href="/{{ $profileSpanish->images->url5 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url6) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                         <?php $tama�o = getimagesize($profileSpanish->images->url6); $w = $tama�o[0]; $h =$tama�o[1] ?>
                     @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url6 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link" href="/{{ $profileSpanish->images->url6 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url7) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <?php $tama�o = getimagesize($profileSpanish->images->url7); $w = $tama�o[0]; $h =$tama�o[1] ?>
                       @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url7 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" class ="image-link" href="/{{ $profileSpanish->images->url7 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url8) )
            
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <?php $tama�o = getimagesize($profileSpanish->images->url1); $w = $tama�o[0]; $h =$tama�o[1] ?>
                          @if($w >= $h)
                        <div class="entry profile_view">
                        @else
                        <div class="entry profile_view_h">
                        @endif
                            <img src="/{{ $profileSpanish->images->url1 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                   <a title="" class ="videoLink" href="{{ $profileSpanish->images->url8 }}" rel="prettyPhoto[myGallery]"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif
        </div><!-- end row -->
        
    </div><!-- end container -->
</section><!-- end section -->
