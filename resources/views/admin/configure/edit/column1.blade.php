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
                            <label for="recipient-name" class="control-label">Nombre Etiqueta:</label>
                            <input type="text" class="form-control tag_name" name="name" value="{!! $data->name !!}" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Name tag:</label>
                            <input type="text" class="form-control" name="name_en" value="{!! $data->name_en !!}" required>
                        </div>
                        <div class="form-group">                            
                            <input type="text" class="hidden tag_url form-control" name="URL" value="{!! $data->URL !!}" required>
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
<script type="text/javascript">
 
        $('.tag_name').on('change', function(e){
         
            var url = window.location.hostname,first=true,valueSplit = "";
            var result = "";
            if (location.port) {
                var port = ':'+location.port;
            }else{
                var port = '';
            }
            valueSplit = this.value.split(" ");
            for(var i=0; i < valueSplit.length;i++){
            
              if(first){
                result = valueSplit[0];
                first = false;
              }else{
                result += '-'+valueSplit[i];
              }
              
            }
           
            var value = location.protocol+'//'+url+port+'/tag/'+result;
            $('.tag_url').val(value);
        });

</script>
