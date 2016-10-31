<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['url' => '/admin/'. $rootBase . '/' . $data->id, 'method' => 'PUT', 'class' => 'UpdateForm']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{!! trans('label.modal_edit') !!}</h4>
                </div>
                <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nombre:</label>
                            <input type="text" class="form-control tag_name" name="name" value="{!! $data->name !!}" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">URL:</label>
                            <input type="text" class="form-control" name="URL" value="{!! $data->URL !!}" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">{!! trans('label.link') !!}</label>
                            {{--<input type="text" class="form-control" name="URL" value="{!! $data->URL !!}" required>--}}
                            <input type="text" name="photo" value="{!! $data->photo !!}">
                        </div>                        
                        @yield('content_modal')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('label.cancel') !!}</button>
                    <button type="submit" data-type="modal" class="btn btn-primary updateModal">{!! trans('label.save_update') !!}</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    
</div>
