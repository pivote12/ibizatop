<div class="row">
    <div class="form-group col-md-6">
        <label class="col-md-4 control-label" for="inputDefault">Nombre Etiqueta:</label>
        <div class="col-md-8">
            <input type="text" class="form-control tag_name" name="name" placeholder="Título" required>
        </div>
    </div>
     <div class="form-group col-md-6">
        <label class="col-md-4 control-label" for="inputDefault">Tag Name:</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="name_en" placeholder="Title" required>
        </div>
    </div>
    <div class="form-group col-md-4">
       
        <div class="col-md-8">
            <input type="text" class="hidden form-control tag_url" name="URL" placeholder="ejemplo: google.es">
        </div>
    </div>
</div>

@yield('content')
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