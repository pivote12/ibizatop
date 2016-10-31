@if(Config::get('app.locale') == 'es')
<div id="w2-spanish">
    <section class="page-title grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{!! $profileSpanish->name !!}</h1>
                    <p>Categoria: {{$profileSpanish->category}}</p>
                    <p></p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                       
                    <div class="text-widget">
                        <p>{{$profileSpanish->description}}.</p>
                    </div><!-- end text-widget -->

                    <div class="about-widget">
                        <hr>
                        <address>
                            <i class="fa fa-phone alignleft"></i>
                            <strong>Teléfono:</strong>
                            <p>{{$profileSpanish->phone}}</p>
                        </address>
                        <address>
                            <i class="fa fa-money alignleft"></i>
                            <strong>Tarifas:</strong>
                            <p>{{$profileSpanish->price}}</p>
                        </address>
                        <address>
                            <i class="fa fa-bus alignleft"></i>
                            <strong>Salidas:</strong>
                            <p>{{$profileSpanish->departures}}</p>
                        </address>
                        <address>
                            <i class="fa fa-history alignleft"></i>
                            <strong>Horario:</strong>
                            <p>{{$profileSpanish->timetable}}</p>
                        </address>
                        <address>
                            <i class="fa fa-map-marker alignleft"></i>
                            <strong>Zona:</strong>
                            <p>{!! $profileSpanish->zona !!}</p>
                        </address>
                         
                        
                                                
                    </div><!-- end about-widget -->

                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="/{{ $profileSpanish->images->url1 }}" alt="" class="img-fullwidth wow slideInRight">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-heart alignleft"></i>
                            <strong>Edad:</strong>
                            <p>{{$profileSpanish->age}}</p>
                        </address>
                        <address>
                            <i class="fa fa-venus-mars alignleft"></i>
                            <strong>Orientación sexual:</strong>
                            <p>{{$profileSpanish->sexual_orientation}}</p>
                        </address>
                        <address>
                            <i class="fa fa-check alignleft"></i>
                            <strong>Fotos reales verificadas:</strong>
                                @if($profileSpanish->images->check_photos == 'of')
                                        <p>No</p>
                                @else
                                        <p>SI</p>
                                @endif

                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Medidas:</strong>
                            <p>{{$profileSpanish->measurements}}</p>
                        </address>                          <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Altura:</strong>
                            <p>{{$profileSpanish->height}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-flag alignleft"></i>
                            <strong>Nacionalidad:</strong>
                            <p>{{$profileSpanish->nationality}}</p>
                        </address>                          <address>
                            <i class="fa fa-flag-o alignleft"></i>
                            <strong>Idiomas:</strong>
                            <p>{{$profileSpanish->languages}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    @include('frontend.base.imagesProfiles')

</div>
@endif
@if(Config::get('app.locale') == 'en')
<div id="w2-english">
    
    <section class="page-title grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left" >
                    <h1>{{$profileEnglish->name}}</h1>
                    <p>Category: {{$profileEnglish->category}}</p>
                    <p></p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
               
                    <div class="text-widget">
                        <p>{{$profileEnglish->description}}.</p>
                    </div><!-- end text-widget -->

                    <div class="about-widget">
                        <hr>
                        <address>
                            <i class="fa fa-phone alignleft"></i>
                            <strong>Phone:</strong>
                            <p>{{$profileEnglish->phone}}</p>
                        </address>
                        <address>
                            <i class="fa fa-money alignleft"></i>
                            <strong>Price:</strong>
                            <p>{{$profileEnglish->price}}</p>
                        </address>
                        <address>
                            <i class="fa fa-bus alignleft"></i>
                            <strong>Departures:</strong>
                            <p>{{$profileEnglish->departures}}</p>
                        </address>
                        <address>
                            <i class="fa fa-history alignleft"></i>
                            <strong>Timetable:</strong>
                            <p>{{$profileEnglish->timetable}}</p>
                        </address>
                        <address>
                            <i class="fa fa-map-marker alignleft"></i>
                            <strong>Zone:</strong>
                            <p>{!! $profileSpanish->zona !!}</p>
                        </address>
                        <address>
                            <i class="fa fa-map-marker alignleft"></i>
                            <strong>Area:</strong>
                            <p>{!! $profileSpanish->area !!}</p>
                        </address>
                    </div><!-- end about-widget -->

                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="/{{ $profileSpanish->images->url1 }}" alt="" class="img-fullwidth wow slideInRight">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-heart alignleft"></i>
                            <strong>Age:</strong>
                            <p>{{$profileEnglish->age}}</p>
                        </address>
                        <address>
                            <i class="fa fa-venus-mars alignleft"></i>
                            <strong>Sexual Orientation:</strong>
                            <p>{{$profileEnglish->sexual_orientation}}</p>
                        </address>
                        <address>
                            <i class="fa fa-check alignleft"></i>
                            <strong>Verified Real Photos:</strong>
                            @if($profileSpanish->images->check_photos == 'of')
                                <p>No</p>
                            @else
                                <p>YES</p>
                            @endif
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Measurements:</strong>
                            <p>{{$profileEnglish->measurements}}</p>
                        </address>                          <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Height:</strong>
                            <p>{{$profileEnglish->height}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-flag alignleft"></i>
                            <strong>Nationality:</strong>
                            <p>{{$profileEnglish->nationality}}</p>
                        </address>                          <address>
                            <i class="fa fa-flag-o alignleft"></i>
                            <strong>Languages:</strong>
                            <p>{{$profileEnglish->languages}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    @include('frontend.base.imagesProfiles')

</div>
@endif