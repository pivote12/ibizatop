@extends('frontend.base.layout3')

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
                <h3>{!! trans('label.trans') !!}</h3>
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
                <h3>{!! trans('label.trans') !!} Deluxe</h3>
                <hr>
                @if(Config::get('app.locale') == 'en')
            <p class="lead">{!! $principal->featuredDescriptionEn !!}</p>
            @else
            <p class="lead">{!! $principal->featuredDescription !!}</p>
            @endif
            </div><!-- end title -->
  
            <hr class="invis">

            <div class="row">

                    @foreach($transDelux as $profile)
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


    <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
        <div class="container">
        </div><!-- end container -->
    </section><!-- end section -->
        <section class="section white">
        <div class="container">
            <div class="big-title text-center">
                <h3>{!! trans('label.trans') !!}</h3>
                   <hr>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">

                @foreach($trans as $profile)
                <?php $tama�o = getimagesize($profile->images['url1']); $w = $tama�o[0]; $h =$tama�o[1] ?>
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
                                        {{--<a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
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
                            <small>Trans</small>
                        </div><!-- end team-member -->
                    </div>
                @endforeach



            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

@endsection
@include('frontend.script.helps')
