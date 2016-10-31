@extends('frontend.base.layout2')

@section('language')
    <div class="col-md-6 text-right">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img @if( \Config::get('app.locale') == 'es' ) src="/assets-frontend/images/icons/es.png" @else src="/assets-frontend/images/icons/en.png" @endif style="width: 30px; height: 20px" > <span class="fa fa-angle-down"></span></button>
            <ul class="dropdown-menu start-right" role="menu">
                <li><a href="/locale?locale=en"><img src="/assets-frontend/images/icons/en.png"></a></li>
                <li><a href="/locale?locale=es"><img src="/assets-frontend/images/icons/es.png"></a></li>
            </ul>
        </div><!-- end left -->
@endsection

@section('content')
    
    <section class="section white">
        <div class="container">
            <div class="big-title text-center">
                <h3>Escorts</h3>
                <hr>
                @if(Config::get('app.locale') == 'en')
            <p class="lead">{!! $principal->scorts_des_en !!}</p>
            @else
            <p class="lead">{!! $principal->scorts_des_es !!}</p>
            @endif
            </div><!-- end title -->
        </div><!-- end container -->
    </section><!-- end section --> 
    
    <section class="section white">
        <div class="container">
            <div class="big-title text-center">
                <h3>Escorts Deluxe</h3>
                <hr>
                @if(Config::get('app.locale') == 'en')
            <p class="lead">{!! $principal->bannersDescriptionEn !!}</p>
            @else
            <p class="lead">{!! $principal->bannersDescription !!}</p>
            @endif
            </div><!-- end title -->
  
            <hr class="invis">

            <div class="row">

                    @foreach($escortDelux as $profile)
                     <?php $tamaño = getimagesize($profile->images['url1']); $w = $tamaño[0]; $h =$tamaño[1] ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                    @if($w >= $h)
                                    <div class="entry profile_view">
                                     @else
                                    <div class="entry profile_view_h">
                                    @endif
                                    <img src="/{!! $profile->images['url1'] !!}" alt="">
                                    <div class="magnifier">
                                        <div class="visible-buttons">
                                            {!! Form::open(['url' => '/profile/' . $profile->name.'?id='.$profile->id , 'method' => 'POST', 'target' => '_self']) !!})
                                            {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                            <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                            <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                            <button type="submit" class="showProfile"></button>
                                            {!! Form::close() !!}

                                            {{--<a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                        </div><!-- end buttons -->
                                    </div><!-- end magnifier -->
                                </div><!-- end entry -->
                                <h3>{!! $profile->name !!}</h3>
                                <small>Escort deluxe</small>
                            </div><!-- end team-member -->
                        </div>
                    @endforeach


            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


    <section class="section white">
        <div class="container">
            <div class="big-title text-center">
                <h3>Escorts {!! trans('label.outstanding') !!}</h3>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">
                @foreach($escortFeatured as $profile)
                <?php $tamaño = getimagesize($profile->images['url1']); $w = $tamaño[0]; $h =$tamaño[1] ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                             @if($w >= $h)
                                    <div class="entry profile_view">
                                     @else
                                    <div class="entry profile_view_h">
                                    @endif
                                <img src="/{!! $profile->images['url1'] !!}" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        {{--<a title="" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                        {!! Form::open(['url' => '/profile/' . $profile->name.'?id='.$profile->id , 'method' => 'POST', 'target' => '_blank']) !!})
                                        {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                        <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                        <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                        <button type="submit" class="showProfile"></button>
                                        {!! Form::close() !!}
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>{!! $profile->name !!}</h3>
                            <small>Escort Destacada</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->
                @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_01.jpg');" data-img-width="1920" data-img-height="504" data-diff="100">
        <div class="container">
            <hr class="invis">
        </div><!-- end container -->
    </section><!-- end section -->
    
    
<section class="section white">
    <div class="container">
        <div id="owl-portfolio" class="owl-custom">
            @foreach($banners as $banner)
                <div class="owl-item">
                    <div class="entry">
                        <img src="banners/{!! $banner->photo !!}" alt="">
                        <div class="magnifier">
                            <div class="visible-buttons">
                            
                                  @if(strpos($banner->URL,"http") === 0 )
                                    <a title="{!! $banner->name !!}" href="{!! $banner->URL !!}" title="{!! $banner->URL !!}" target="_blank"><i class="fa fa-link"></i></a>
                                    @else
                                    <a title="{!! $banner->name !!}" href="http://{!! $banner->URL !!}" title="{!! $banner->URL !!}" target="_blank"><i class="fa fa-link"></i></a>
                                     @endif
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


   <!-- <section class="section white">
        <div class="container">
            <div id="owl-portfolio" class="owl-custom">
                @foreach($escortNovelties as $profile)
                <?php $tamaño = getimagesize($profile->images['url1']); $w = $tamaño[0]; $h =$tamaño[1] ?>
                    <div class="owl-item">
                       @if($w >= $h)
                                    <div class="entry profile_view">
                                     @else
                                    <div class="entry profile_view_h">
                                    @endif
                            <img src="/{!! $profile->images['url1'] !!}" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
{{--                                    <a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-link"></i></a>--}}
                                    {!! Form::open(['url' => '/profile/' . $profile->name.'?id='.$profile->id , 'method' => 'POST', 'target' => '_blank']) !!})
                                    {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                    <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                    <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                    <button type="submit" class="showProfile"></button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach

            </div>
        </div>
    </section>-->

    <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
        <div class="container">
        </div><!-- end container -->
    </section><!-- end section -->
    <?php $i = 0; ?>
    <section class="section white">
    <div class="container">      

        
            @foreach($scortsAll as $profile)
            @if($profile->images['url1'] != '' )
                @if($i == 0)
                <div class="row">
                
                @endif
                <?php $tamaño = getimagesize($profile->images['url1']); $w = $tamaño[0]; $h =$tamaño[1] ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                         @if($w >= $h)
                                    <div class="entry profile_view">
                                     @else
                                    <div class="entry profile_view_h">
                                    @endif
                        
                            <img src="/{!! $profile->images['url1'] !!}" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    {!! Form::open(['url' => '/profile/' . $profile->name.'?id='.$profile->id , 'method' => 'POST', 'target' => '_self']) !!})
                                    {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                    <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                    <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                    <button type="submit" class="showProfile"></button>
                                    {!! Form::close() !!}
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h3>{!! $profile->name !!}</h3>                        
                    </div><!-- end team-member -->
                </div>
                @if($i == 3)                
                 </div>
                <?php $i = 0; ?>
                @else
                <?php $i++; ?>
                @endif
            @endif
            @endforeach

        
    </div>
</section>

@endsection

@include('frontend.script.helps')