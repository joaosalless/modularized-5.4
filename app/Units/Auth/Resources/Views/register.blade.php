@extends('auth::layouts.default')

@section('content')

<div class="container">

    <div class="overlay"></div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open([
                'route'  => ["{$panel->authRouteAlias()}.register", 'panel' => $panel->authProvider()],
                'method' => 'post',
            ])!!}
            <div class="panel panel-default">

                <div class="panel-heading">Cadastro de {{ $panel->makeGuardModel()->getEntityName() }}</div>

                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12">
                            @include('alert::messages')
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsSelect('profile_type', panel()->makeGuardModel()->getLabel('profile_type'), panel()->makeGuardModel()->getProfileTypes(), null, []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsText('profile[name]', panel()->makeGuardModel()->getLabel('name'), null, []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsEmail('email', panel()->makeGuardModel()->getLabel('email'), null, []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsPassword('password', panel()->makeGuardModel()->getLabel('password'), []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsCheckboxTermos('terms', 'Aceito os ', 1, false, [], ['terms' => ['url' => url('/termos'), 'title' => 'Termos de Serviço']]) }}
                        </div>

                    </div>
                </div>
                <div class="panel-body" style="border-top: 1px solid #ddd">
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::bsBtnSubmit('btnCadastrar', 'Cadastrar', ['class' => 'btn btn-primary pull-right']) }}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
