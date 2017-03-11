@extends("{$panel->unitAlias()}::layouts.app")

@section('formOpen')
    {!! Form::model($entity, [
        'route'  => ["{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.store"],
        'method' => 'post',
        'files'  => true,
    ])!!}
@stop

@section('content')

    @yield('formOpen')

    <div class="panel panel-default no-margin-bottom">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper($entity->getLabel('new')) }}
            {{ Str::upper($entity->getEntityName()) }}
        </div>

        <div class="panel-body">
            @include("{$panel->unitAlias()}::{$entity->getEntityViewsAlias()}._form")
            @include("{$panel->unitAlias()}::shared.media.media_upload")
        </div>

        <div class="panel-body" style="border-top: 1px solid #ddd">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::bsBtnSubmit('btnSalvar', $entity->getLabel('save'), ['class' => 'btn btn-primary pull-right']) }}
                </div>
            </div>
        </div>

    </div>

    {!! Form::close() !!}

@endsection
