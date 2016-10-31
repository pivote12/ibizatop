@extends('admin.base.layout')
@section('content')
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="/assets/images/logo.png" height="35" alt="Escorts in Mallorca - Website Administrator" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img @if( \Config::get('app.locale') == 'es' ) src="/assets-frontend/images/icons/es.png" @else src="/assets-frontend/images/icons/en.png" @endif   width="40" height="30" > <span class="fa fa-angle-down"></span></button>
                    <ul class="dropdown-menu start-right" role="menu">
                        <li><a href="/admin/locale?locale=en"><img src="/assets-frontend/images/icons/en.png" alt="English" width="40" height="30"> {!! trans('label.english') !!}</a></li>
                        <li><a href="/admin/locale?locale=es"><img src="/assets-frontend/images/icons/es.png" alt="Español" width="40" height="30"> {!! trans('label.spanish') !!}</a></li>
                    </ul>
                </div>

                <span class="separator"></span>


                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="/assets/imgProfiles/{{Auth::user()->photo}}" alt="Administrador" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info">
                            <span class="name">{!! Auth::user()->name !!}</span>
                            {{--<span class="role">administrador</span>--}}
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a class="index" href="configure-profile/{{Auth::user()->id}}/edit"><i class="fa fa-gear"></i> {!! trans('label.setting') !!}</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="/admin/logout"><i class="fa fa-power-off"></i> {!! trans('label.logout') !!}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">

            @include('admin.base.helpsLayout.menu')
            <section role="main" class="content-body" id="containerBase">
                @include('admin.partials.status')
                @include('admin.partials.errors')
                @yield('containerBody')
            </section>
        </div>
    </section>
@endsection
