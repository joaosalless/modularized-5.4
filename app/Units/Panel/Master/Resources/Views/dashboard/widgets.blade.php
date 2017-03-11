<div class="row" style="margin: -7.5px -22.5px;">

    @foreach($entities as $key => $entity)
    <div class="col-sm-4" style="padding: 7.5px">
        <div class="hero-widget well well-sm no-margin-bottom">
            <div class="icon">
                <i class="{{ $entity['model']->getEntityIcon() }}"></i>
            </div>
            <div class="text">
                <var>{{ $entity['pagination']->total() }}</var>
                <label class="text-muted">{{ $entity['model']->getEntityNamePlural() }}</label>
            </div>
            <div class="options">
                <a href="{{ route("{$panel->routeAlias()}.{$entity['model']->getEntityRouteAlias()}.index") }}" class="btn btn-default btn-sm btn-block">
                    {{ trans('model.manage') }} {{ $entity['model']->getEntityNamePlural() }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>