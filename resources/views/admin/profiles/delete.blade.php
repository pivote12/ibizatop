<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['url' => '/admin/profiles/' . $dataSpanish->id, 'method' => 'DELETE' ]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{!! trans('label.modal_delete') !!}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 center">
                        <img src="/assets/images/delete.png" alt="">
                    </div>

                    <div class="col-md-8">
                        <h2>{!! trans('label.descriptionDelete') !!}</h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('label.cancel') !!}</button>
                <button type="submit" data-type="modal" class="btn btn-primary updateModal">{!! trans('label.delete') !!}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>



