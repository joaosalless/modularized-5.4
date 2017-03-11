@extends("{$panel->unitAlias()}::layouts.app")

@section('formOpen')
    {!! Form::model($entity, [
        'route'  => "{$panel->routeAlias()}.profile.update",
        'method' => 'post',
        'files'  => true,
    ])!!}
@stop

@section('content')

    @yield('formOpen')

    <div class="panel panel-default">

        <div class="panel-heading">
            <i class="{{ $entity->getEntityIcon() }}"></i>
            {{ Str::upper(trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.edit')) }}
            {{ Str::upper(trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.my_account')) }}
        </div>

        @if(!$entity->profile_type)
            <div class="panel-body-heading" style="border-bottom: 1px solid #ddd">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#person" aria-controls="person" role="tab" data-toggle="tab">
                            {{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.profile_type_person') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#company" aria-controls="company" role="tab" data-toggle="tab">
                            {{ trans($entity->getEntityDomainAlias().'::'.$entity->getEntityTranslationKey().'.profile_type_company') }}
                        </a>
                    </li>
                </ul>
            </div>
        @endif

        <div class="panel-body">
            <div class="row">
                <div class="tab-content">
                    @include("{$panel->unitAlias()}::profile.fields_account")
                    <div role="tabpanel" class="tab-pane {{ $entity->isPerson() ? 'active' : '' }}" id="person">
                        @if($entity->isPerson())
                            @include("{$panel->unitAlias()}::profile.fields_person")
                        @endif
                    </div>
                    <div role="tabpanel" class="tab-pane {{ $entity->isCompany() ? 'active' : '' }}" id="company">
                        @if($entity->isCompany())
                            @include("{$panel->unitAlias()}::profile.fields_company")
                        @endif
                    </div>
                    {{ Form::bsEndereco('profile') }}
                </div>
            </div>
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

