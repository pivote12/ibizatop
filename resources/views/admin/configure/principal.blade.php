@include('admin.base.helpsLayout.breadcumb')
<!-- start: page -->
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">{!! trans('label.title_principal') !!}</h2>
            </header>
            @include('admin.configure.forms.principal')
        </section>
    </div>
</div>

