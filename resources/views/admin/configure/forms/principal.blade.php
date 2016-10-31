<div class="panel-body">
    {!! Form::open(['url' => '/admin/configure-principal/' . $data->id, 'method' => 'PUT', 'class' =>  'UpdateForm']) !!}
    <div class="row left">

        <div class="form-group">
            {!! Form::label('textoSuperior', trans('label.label1'),['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('topText', $data->topText ,['class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('email', trans('label.label2'),['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-6">
                <div class="input-group mb-md">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    {!! Form::text('email', $data->email,['class'=>'form-control','placeholder'=>'Email','required' => 'required']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('phone', trans('label.label3'),['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-6">
                <div class="input-group mb-md">
                    <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </span>
                    {!! Form::text('phone',$data->phone,['class'=>'form-control','placeholder'=>'Telefono','required' => 'required']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">{!! trans('label.labeles1')  !!}</label>
            <div class="col-md-6">
                {!! Form::textarea('featuredDescription', $data->featuredDescription, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">{!! trans('label.labeles2')  !!}</label>
            <div class="col-md-6">
                {!! Form::textarea('novelties', $data->novelties, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Description Outstanding</label>
            <div class="col-md-6">
                {!! Form::textarea('featuredDescriptionEn', $data->featuredDescriptionEn, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Description New</label>
            <div class="col-md-6">
                {!! Form::textarea('noveltiesEn', $data->noveltiesEn, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">{!! trans('label.labeles6')  !!}</label>
            <div class="col-md-6">
                {!! Form::textarea('trans_des_es', $data->trans_des_es, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">{!! trans('label.labeles7')  !!}</label>
            <div class="col-md-6">
                {!! Form::textarea('trans_des_en', $data->trans_des_en, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Trans New</label>
            <div class="col-md-6">
                {!! Form::textarea('noveltiesTransEn', $data->noveltiesTransEn, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">{!! trans('label.labeles12')  !!}</label>
            <div class="col-md-6">
                {!! Form::textarea('shemale_des_es', $data->shemale_des_es, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">{!! trans('label.labeles13')  !!}</label>
            <div class="col-md-6">
                {!! Form::textarea('shemale_des_en', $data->shemale_des_en, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Shemale New</label>
            <div class="col-md-6">
                {!! Form::textarea('noveltiesShemaleEn', $data->noveltiesShemaleEn, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>



        <div class="panel-body">
            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-floppy-o"></i> {!! trans('label.save') !!}</button>
        </div>
    </div>

    {!! Form::close() !!}

</div>
