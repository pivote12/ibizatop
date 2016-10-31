<div class="row">
    <div class="form-group col-md-6">
        <label class="col-md-4 control-label" for="inputDefault">{!! trans('label.name') !!}:</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="name" placeholder="Título" required>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="col-md-2 control-label" for="inputDefault">{!! trans('label.link') !!}</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="URL" placeholder="ejemplo: google.es" required>
        </div>
    </div>
</div>

@yield('content')