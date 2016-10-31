@extends('admin.app')

@section('containerBody')
    <header class="page-header">
        <h2>{!! trans('label.admin') !!}</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="/admin">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>{!! trans('label.profile') !!}</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="#"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="content-with-menu content-with-menu-has-toolbar media-gallery">
        <div class="content-with-menu-container">


            <div class="inner-body mg-main">

                <div class="inner-toolbar clearfix">
                    <ul>
                        <li class="right" data-sort-source data-sort-id="media-gallery">
                            <ul class="nav nav-pills nav-pills-primary">
                                <li>
                                    <label>Filtrar:</label>
                                </li>
                                <li class="active">
                                    <a data-option-value="*" href="#all">Todos los perfiles</a>
                                </li>
                                <li>
                                    <a data-option-value=".shemale" href="#escorts">Shemale</a>
                                </li>
                                <li>
                                    <a data-option-value=".trans" href="#trans">Trans</a>
                                </li>                               
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

                    @foreach($data as $key => $value)
                        <div class="isotope-item {!! $value->category !!} col-sm-6 col-md-4 col-lg-3">
                            <div class="thumbnail">
                                <div class="thumb-preview">
                                    <a class="thumb-image" href="/{!!  $value->images['url1'] !!}">
                                        <img src="/{!!  $value->images['url1'] !!}" class="img-responsive" alt="Project">
                                    </a>
                                    <div class="mg-thumb-options">
                                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                        {{--<div class="mg-toolbar">--}}
                                            {{--<a href="#" data-id="{!! $value->id !!}" style="color: white" class="updateProfile"><i class="fa fa-pencil"></i> Editar</a>--}}
                                            {{--<a href="#" style="color: white" data-id="{!! $value->id !!}"><i class="fa fa-trash-o"></i> Borrar</a>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <h5 class="mg-title text-weight-semibold">{!! $value->name !!}</h5>
                                <div class="mg-description">
                                    <strong class="pull-left text-muted">{!! $value->category !!} &nbsp</strong>
                                     <a href="/admin/profiles/" data-id="{!! $value->id !!}" class="updateProfile"><i class="fa fa-pencil"></i> Editar</a>
                                     <a href="/admin/profiles/" data-id="{!! $value->id !!}" class="deleteProfile"><i class="fa fa-trash-o"></i> Borrar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                </div>
            </div>
        </div>
    </section>

    <div id="modalDiv">

    </div>

@endsection

@section('other-script')

    <script type="text/javascript" src="{!! asset('assets/javascripts/examples.mediagallery.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/javascripts/isotope.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/javascripts/bootstrap-datepicker.js') !!}"></script>
    <script>

        $('.updateProfile').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            var urlBase = $(this).attr('href');
            var url = urlBase + id + '/edit';

            $('#modalDiv').load(url, function(){
                $('#myModal').modal('show');

            });

        });

        $('.deleteProfile').on('click', function(e){
            e.preventDefault();

            var id = $(this).data('id');
            var urlBase = $(this).attr('href');
            var url = urlBase + id ;

            $('#modalDiv').load(url, function(){
                $('#myModal').modal('show');
            });
        });

    </script>
@endsection