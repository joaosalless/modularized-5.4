@extends("{$panel->unitAlias()}::layouts.app")

@section('formOpen')
    {!! Form::model($entity, [
        'route'  => ["{$panel->routeAlias()}.{$entity->getEntityRouteAlias()}.update", $entity->id],
        'method' => 'post',
        'files'  => true,
    ])!!}
@stop

@section('content')

    @yield('formOpen')

    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper(trans('model.edit')) }}
            {{ Str::upper($entity->getEntityName()) }}
        </div>

        <div class="panel-body no-padding-bottom">
            @include("{$panel->unitAlias()}::{$entity->getEntityViewsAlias()}._form")
        </div>

        <div class="panel-body no-padding-bottom" style="border-top: 1px solid #ddd;">
            @include("{$panel->unitAlias()}::shared.media.media_upload")
        </div>

        <div class="panel-body" style="border-top: 1px solid #ddd">
            @include("{$panel->unitAlias()}::shared.media.media_list")
        </div>

        <div class="panel-body" style="border-top: 1px solid #ddd">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::bsBtnSubmit('btnSalvar', trans('model.save'), ['class' => 'btn btn-primary pull-right']) }}
                </div>
            </div>
        </div>

    </div>

    {!! Form::close() !!}

@endsection
