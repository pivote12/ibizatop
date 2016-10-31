<footer class="section footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <div class="about-widget text-aling">
                        <address>
                            <i class="fa fa-envelope-o alignleft"></i>
                            <strong>{!! trans('label.email_frontend') !!}</strong>
                            <p><a href="mailto:{!! $principal->email !!}">{!! $principal->email !!}</a></p>
                        </address>
                        <address>
                            <i class="fa fa-phone alignleft"></i>
                            <strong>{!! trans('label.phone_frontend') !!}</strong>
                            <p>{!! $principal->phone !!}</p>
                        </address>
                    </div><!-- end about-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
<?php $i=0;$j=0;$k=0; ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">

                    <div class="latest-posts">
                        <div class="media">
                            <div class="media-body">
                                @foreach($column1 as $column)
                                    @if($i == 0)
                                       @if(strpos($column->URL,"http") === 0 )
                                            @if( \Config::get('app.locale') == 'es' )
                                             <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}"  target="_blank">{!! $column->name !!}</a></h4>
                                             @else
                                             <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}"  target="_blank">{!! $column->name_en !!}</a></h4>
                                            @endif
                                        @else
                                        @if( \Config::get('app.locale') == 'en' )
                                         <h4 class="media-heading"><a href="http://{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name_en !!}</a></h4>
                                         @else
                                          <h4 class="media-heading"><a href="http://{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name !!}</a></h4>
                                         @endif
                                        @endif                             
                                    @endif
                                    <?php $i++; ?>
                                    @if($i == 3)                                   
                                    <?php $i=0; ?>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end latest-posts -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">

                    <div class="latest-posts">
                        <div class="media">
                            <div class="media-body">
                                @foreach($column1 as $column)
                                    @if($j == 1)
                                      @if(strpos($column->URL,"http") === 0 )
                                            @if( \Config::get('app.locale') == 'es' )
                                             <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}"  target="_blank">{!! $column->name !!}</a></h4>
                                             @else
                                             <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}"  target="_blank">{!! $column->name_en !!}</a></h4>
                                            @endif
                                        @else
                                        @if( \Config::get('app.locale') == 'en' )
                                         <h4 class="media-heading"><a href="http://{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name_en !!}</a></h4>
                                         @else
                                          <h4 class="media-heading"><a href="http://{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name !!}</a></h4>
                                         @endif
                                        @endif
                                    @endif
                                    <?php $j++; ?>
                                    @if($j == 4)                                   
                                    <?php $j=1; ?>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end latest-posts -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">

                    <div class="latest-posts">
                        <div class="media">
                            <div class="media-body">
                                 @foreach($column1 as $column)
                                    @if($k == 2)
                                      @if(strpos($column->URL,"http") === 0 )
                                            @if( \Config::get('app.locale') == 'es' )
                                             <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}"  target="_blank">{!! $column->name !!}</a></h4>
                                             @else
                                             <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}"  target="_blank">{!! $column->name_en !!}</a></h4>
                                            @endif
                                        @else
                                        @if( \Config::get('app.locale') == 'en' )
                                         <h4 class="media-heading"><a href="http://{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name_en !!}</a></h4>
                                         @else
                                          <h4 class="media-heading"><a href="http://{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name !!}</a></h4>
                                         @endif
                                        @endif
                                    @endif
                                    <?php $k++; ?>
                                    @if($k == 5)                                   
                                    <?php $k=2; ?>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end latest-posts -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer>