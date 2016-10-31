{!! trans('label.description_photo') !!}
<div class="row">
    <div class="row col-md-6">
        <label class="col-xs-4 control-label mt-xs pt-none">{!! trans('label.check_photos') !!}</label>
        <div class="col-md-2">
            <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                @if($dataSpanish->images['check_photos'] == 'of')
                    <input type="checkbox" name="check_photos">
                @else
                    <input type="checkbox" name="check_photos" checked>
                @endif
                <label for="profileDeluxe"></label>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id = "archivos">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                <div class="row">
                    <div class="form-group col-xs-12" id = "content-file">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th style="width: 40px; text-align:center;">Seleccionar archivo</th>
                                <th style="text-align:center;" >Vista Previa</th>
                                <!--<th style="text-align:center; width: 40px;" ></th>-->
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(config('photosProfile.archivos') as $key => $description )
                                <?php $field = "img".($key+1) ?>
                                <?php $name = "input".($key+1) ?>
                                <?php $url = "url".($key+1) ?>
                                <tr>
                                    <th>{{ $description }}</th>
                                    <th style="text-align:center; width: 20px;">
                                        <div style="background-image: url('/cargar.png'); background-repeat: no-repeat; background-position: center center; " title="Seleccionar archivo desde su PC">
                                            <input type="file" style="outline: none; opacity: 0;" id="{{ $field }}" name="{{ $name }}"/>
                                        </div>
                                    </th>
                                    <th style="text-align:center;" id="image"><a id="image_click" href="/admin/img/{{$dataSpanish->id}}/{{$key+1}}"><img  @if($dataSpanish->images[$url] == '') src="/default.png" @else src="/{!! $dataSpanish->images[$url] !!}" @endif id="mm{{ $field }}" width='50' height='50' ></a></th>
                                    <!--<th style="text-align:center; width: 40px;><a href="/admin/configure-column-one" data-id="2" class="on-default remove-row"><i class="fa fa-trash-o"></i></a></th>-->
                                </tr>
                            @endforeach
                            <tr>
                            	<th>
                            		Embed video URL
                            	</th>
                            	<th>
                            		<input type="text" class="form-control video"  name="video"  value="{!! $dataSpanish->images["url8"] !!}">
                            	</th>
                            </tr>
                            </tbody>
                        </table>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function erase(a){
    debugger;
  }
</script>