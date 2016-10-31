@extends('admin.app')

@section('containerBody')
    @include('admin.base.helpsLayout.breadcumb')
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action     "></a>
                    </div>
                    <h2 class="panel-title">{!! trans('label.users') !!}</h2>
                </header>
                <div class="panel-body">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-md">
                                        <a href="/admin/users/create" class="btn btn-primary">{!! trans('label.create') !!} <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                <thead>
                                <tr>
                                    <th>{!! trans('label.name_profile') !!}</th>
                                    <th>{!! trans('label.email_frontend') !!}</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $user)
                                        <tr class="gradeX">
                                            <td>{!! $user->name !!}</td>
                                            <td>{!! $user->email !!}</td>
                                            <td class="actions">

                                                {{--<a href="/admin/users/{!! $users->id !!}/edit" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>--}}
                                                {{--<a href="/admin/users/{!! $users->id !!}/edit" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>--}}
                                                <a href="/admin/users/{!! $user->id !!}/edit" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="/admin/users/{!! $user->id !!}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>




                </div>
            </section>
        </div>
    </div>
@endsection

@section('other-script')
    <script type="text/javascript" src="{!! asset('assets/javascripts/examples.datatables.editable.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/javascripts/jquery.dataTables.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/javascripts/datatables.js') !!}"></script>
@endsection