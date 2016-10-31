@extends('frontend.base.layout')

@section('language')
    <div class="col-md-6 text-right">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img @if( \Config::get('app.locale') == 'es' ) src="/assets-frontend/images/icons/es.png" @else src="/assets-frontend/images/icons/en.png" @endif style="width: 30px; height: 20px" > <span class="fa fa-angle-down"></span></button>
            <ul class="dropdown-menu start-right" role="menu">
                <li><a href="/locale?locale=en&code={{$codeProfile}}"><img src="/assets-frontend/images/icons/en.png"></a></li>
                <li><a href="/locale?locale=es&code={{$codeProfile}}"><img src="/assets-frontend/images/icons/es.png"></a></li>
            </ul>
        </div><!-- end left -->
@endsection

@section('content')
    {{--<section class="panel form-wizard">--}}
        {{--<div class="tabs container">--}}
            {{--<ul class="nav nav-tabs nav-justified">--}}
                {{--<li class="active">--}}
                    {{--<a href="#w2-spanish" data-toggle="tab" class="text-center">--}}
                        {{--{!! trans('label.spanish') !!}--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#w2-english" data-toggle="tab" class="text-center">--}}
                        {{--{!! trans('label.english') !!}--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<div class="tab-content">--}}
            
                <input type="hidden" id="language" value="<?php echo \Config::get('app.locale_frontend');?>">
                 @if($profileSpanish->category != 'agencias')
                   @include('frontend.base.contentProfile')
                 @else
                   @include('frontend.base.contentProfileAgency')
                 @endif
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection

