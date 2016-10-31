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
                    <div class="container col-md-12">


                        {!! Form::open(['url' => '/admin/users/'.$user->id, 'method' => 'PUT', 'class' => 'form-horizontal', "enctype" => "multipart/form-data"]) !!}

                        <div class="form-group">
                            <label for="name">{!! trans('label.name_profile') !!}</label>
                            {!!Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required'])!!}
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            {!!Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Correo Electronico', 'id' => 'email'])!!}
                        </div>

                        <div class="form-group">
                            <label for="password">{!! trans('label.password') !!}</label>
                            {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'id' => 'pass'])!!}
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">{!! trans('label.confirm_password') !!}</label>
                            {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmacion Contraseña', 'id' => 'passVerify'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('photo', trans('photo'))!!}
                            {!!Form::file('photo')!!}
                        </div>

                        <br>
                        {!!Form::submit(trans('label.save'), ['class' => 'btn btn-primary'])!!}

                        {!!Form::close()!!}

                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection

