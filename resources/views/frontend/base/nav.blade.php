<header class="header header-white">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-12">
                <nav class="navbar navbar-default yamm">
                    <div class="container-header">
                        <div class="navbar-table">
                            <div class="navbar-cell tight">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="/"><img src="/assets-frontend/images/logo.png" alt="Ova"></a>
                                    <div>
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                </div><!-- end navbar-header -->
                            </div><!-- end navbar-cell -->

                            <div class="navbar-cell stretch">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                    <div class="navbar-cell">
                                        <ul class="nav navbar-nav navbar-right">

                                            @foreach(config('menuFrontend') as $key => $value)
                                                <li>
                                                    <a href="/{!! $key !!}">{!! trans('label.'.$value) !!}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
