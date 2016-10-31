@extends('admin.base.layout')
@section('content')
    <section class="body-sign">
        <div class="center-sign" >
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-left">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i>{!! trans('login.title') !!}</h2>
                </div>
                <div class="panel-body">

                    @include('admin.partials.errors')

                    {!! Form::open(['url' => '/admin/login', 'method' => 'post']) !!}
                        <div class="form-group mb-lg">
                            {!! Form::label('email', trans('login.email')) !!}
                            <div class="input-group input-group-icon">
                                {!! Form::email('email', old('email'), ['class' => 'form-control input-lg', 'required' => 'required'] ) !!}
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                {!! Form::label('password', trans('login.password')) !!}
                                <a href="/admin/password/email" class="pull-right" id="recoveryPassword">{!! trans('login.recoveryPassword') !!}</a>
                            </div>
                            <div class="input-group input-group-icon">
                                {!! Form::password('password', ['class' => 'form-control input-lg', 'required' => 'required']) !!}
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox"/>
                                    {!! Form::label('remember', trans('login.remember')) !!}
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary hidden-xs">{!! trans('login.ok') !!}</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">{!! trans('login.ok') !!}</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. {!! trans('login.copyright') !!}.</p>
        </div>
    </section>
@endsection

@section('other-script')
    <script type="text/javascript" src="{!! asset('assets/javascripts/login.js') !!}"></script>
@endsection