@extends('admin.base.layout')
@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-left">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> {!! trans('login.titleRecoveryPassword') !!}</h2>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                        <p class="m-none text-weight-semibold h6">{!! trans('login.messageRecoveryPassword') !!}</p>
                    </div>
                    @include('admin.partials.errors')
                    @include('admin.partials.status')


                    {!! Form::open(['url' => '/admin/password/email', 'method' => 'post']) !!}
                        <div class="form-group mb-none">
                            <div class="input-group">
                                {!! Form::email('email',old('email'), ['class' => 'form-control input-lg', 'required' => 'required']) !!}
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-lg" type="submit">{!! trans('login.send') !!}</button>
                                </span>
                            </div>
                        </div>
                        <p class="text-center mt-lg">{{ trans('login.confirmRecoveryPassword') }} <a href="/login">{{ trans('login.ok') }}</a>
                    {!! Form::close() !!}

                </div>
            </div>
            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. {!! trans('login.copyright') !!}.</p>
        </div>
    </section>
@endsection









