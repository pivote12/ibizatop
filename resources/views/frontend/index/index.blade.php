@extends('frontend.base.layout')

@section('language')
    <div class="col-md-6 text-right">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img @if( \Config::get('app.locale') == 'en' ) src="/assets-frontend/images/icons/en.png" @else src="/assets-frontend/images/icons/es.png" @endif style="width: 30px; height: 20px" > <span class="fa fa-angle-down"></span></button>
            <ul class="dropdown-menu start-right" role="menu">
                <li><a href="/locale?locale=en"><img src="/assets-frontend/images/icons/en.png"></a></li>
                <li><a href="/locale?locale=es"><img src="/assets-frontend/images/icons/es.png"></a></li>
            </ul>
        </div><!-- end left -->
@endsection

@section('content')
    @include('frontend.base.slider')

    @include('frontend.base.sectionOne')

    <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_01.jpg');" data-img-width="1920" data-img-height="504" data-diff="100">
        <div class="container">
            <hr class="invis">
        </div>
    </section>
    
    @include('frontend.base.sectionFor')


    <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
        <div class="container">
        </div>
    </section>
@endsection

@include('frontend.script.helps')
