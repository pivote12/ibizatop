@extends('admin.app')

@section('containerBody')
    @include('admin.base.helpsLayout.breadcumb')
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action"></a>
                    </div>
                    <h2 class="panel-title">{!! trans('label.users') !!}</h2>
                </header>
                <div class="panel-body">

                    {!! Form::open(['url' => '/admin/users/'.$user->id, 'method' => 'DELETE']) !!}
                        <h2>Confirma la eliminacion del usuario <strong>{!! $user->name !!}</strong> </h2>
                        <input type="submit" class="btn btn-primary" value="{!! trans('label.delete') !!}">
                        <a href="/admin/users" class="btn btn-default">{!! trans('label.cancel') !!}</a>
                    {!! Form::close() !!}



                </div>
            </section>
        </div>
    </div>
@endsection

