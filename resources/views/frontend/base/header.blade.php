<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="top-details">
                    <strong>{!! $principal->topText !!}</strong>
                    <span><i class="fa fa-envelope-o"></i> <a href="mailto:{!! $principal->email !!}">{!! $principal->email !!}</a></span>
                    <span><i class="fa fa-phone"></i>  {!! $principal->phone !!}</span>
                </div>
            </div><!-- end left -->

            @yield('language')




        </div><!-- end row -->
    </div><!-- end container -->
</div>