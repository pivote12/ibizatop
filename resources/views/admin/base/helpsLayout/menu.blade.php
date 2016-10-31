<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            {!! trans('label.menu') !!}
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">

            @if(Auth::user()->type == 'administrator')
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li class="nav-active">
                            <a href="/admin">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>{!! trans('label.home') !!}</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                <span>{!! trans('label.setting') !!}</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="/admin/users">{!! trans('label.users') !!}</a>
                                </li>
                                <li>
                                    <a href="/admin/agencies">{!! trans('label.agencies') !!}</a>
                                </li>
                                <li>
                                    <a href="/admin/dashboard">{!! trans('label.dashboard') !!}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            @else
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li class="nav-active">
                            <a href="/admin">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>{!! trans('label.home') !!}</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                <span>{!! trans('label.setting') !!}</span>
                            </a>
                            <ul class="nav nav-children">
                                @foreach(config('menu') as $key => $value )
                                    <li>
                                        <a href="{{ $key }}" class="index">
                                            {{ trans($value) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-copy" aria-hidden="true"></i>
                                <span>{!! trans('label.profile') !!}</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="profiles/create" class="index">
                                        {!! trans('label.profile_new') !!}
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/profiles" >
                                        {!! trans('label.all_profile') !!}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='/' target="_blank">
                                <i class="fa fa-external-link" aria-hidden="true"></i>
                                <span>{!! trans('label.front-end') !!}</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endif

            <hr class="separator" />

        </div>

    </div>

</aside>


<style >

    .search

    #tblListado_filter{
        text-align: right;
    }

    #tblListado_length label select{
        border-radius: 0px;
        padding: 0;
    }

    #tblListado_paginate{
        font-size: 1.2em;
    }

    #tblListado_paginate span {
        padding: 5px 5px;
    }

    .container{
        margin-top:20px;
    }
    .image-preview-input {
        position: relative;
        overflow: hidden;
        margin: 0px;
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }
    .image-preview-input input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
        /*    white-space: nowrap;*/
    }
    .image-preview-input-title {
        margin-left:2px;
    }



</style>
