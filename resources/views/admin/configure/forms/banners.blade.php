@extends('admin.configure.forms.columnOne')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label for="">Seleccione una imagen</label>
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Borrar
                    </button>
                    <div class="btn btn-default image-preview-input" style="white-space: nowrap">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Buscar</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" class="inputFiles"/>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>

@endsection




<script>

    // Variable to store your files
//    var files;
//
//    // Add events
//    $('input[type=file]').on('change', prepareUpload);
//
//    // Grab the files and set them to our variable
//    function prepareUpload(event)
//    {
//        files = event.target.files;
//    }
//
//
//    $('.sendFormFile').submit(function (e){
//        e.preventDefault();
//
//
//        alert('listo');
//        var self = $(this);
//        var url = self.prop('action')
//        var data = self.serialize();
//


//        $.post(url, dataForm, function (response) {
//
//            if( response.success){
//
//                loadContent(window.urlActive);
//
//                $.notify({
//                    title: '<strong>Bien!! </strong>',
//                    message: response.message
//                },{
//                    type: 'success'
//                });
//
//            }else{
//                $.each(response.errors, function(indice, value){
//                    $.notify({
//                        title: '<strong>Wooo!! </strong>',
//                        message: value
//                    },{
//                        type: 'danger'
//                    });
//                })
//            }
//
//
//        });
//    });





    $(document).on('click', '#close-preview', function(){
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
                function () {
                    $('.image-preview').popover('show');
                },
                function () {
                    $('.image-preview').popover('hide');
                }
        );
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Imagen</strong>"+$(closebtn)[0].outerHTML,
            content: "Sin imagen",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Buscar");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function (){
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Cambiar");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("Mostrar");
            }
            reader.readAsDataURL(file);
        });
    });
</script>
