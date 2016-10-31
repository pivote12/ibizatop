<section class="section white">
    <div class="container">
        <div class="big-title text-center">
            <h3>Escorts {!! trans('label.outstanding') !!}</h3>
            <hr>
            @if(Config::get('app.locale') == 'en')
              <p class="lead">{!! $principal->featuredDescriptionEn!!}</p>
            @else
              <p class="lead">{!! $principal->featuredDescription!!}</p>
            @endif
        </div><!-- end title -->
        
        <hr class="invis">

        <div class="row">

            @foreach($escortFeatured as $profile)
            <?php $tamaño = getimagesize($profile->images['url1']); $w = $tamaño[0]; $h =$tamaño[1] ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    @if($w >= $h)
                        <div class="entry profile_view">
                         @else
                        <div class="entry profile_view_h">
                        @endif
                        <img src="/{!! $profile->images['url1'] !!}" alt="">
                        <div class="magnifier">
                            <div class="visible-buttons">

                                {!! Form::open(['url' => '/profile/' . $profile->name.'?id='.$profile->id , 'method' => 'POST', 'target' => '_self']) !!})
                                {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                <button type="submit" class="showProfile"></button>
                                {!! Form::close() !!}

                            </div><!-- end buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- end entry -->
                    <h3>{!! $profile->name !!}</h3>
                    <small>Escort Destacada</small>
                </div><!-- end team-member -->
            </div><!-- end col -->
            @endforeach

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

