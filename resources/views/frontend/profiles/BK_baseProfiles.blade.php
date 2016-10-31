@extends('frontend.base.layout')

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


@section('other-script')
    <script>
        $(function () {
            var language = $('#language').val();
            if(language == 'en'){
                $('#w2-spanish').css('display','none');
                $('#w2-english').css('display','block');
            }else{
                $('#w2-spanish').css('display','block');
                $('#w2-english').css('display','none');
            }
        });


    </script>

@endsection
