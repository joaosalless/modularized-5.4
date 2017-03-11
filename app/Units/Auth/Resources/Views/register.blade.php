@extends('auth::layouts.default')

@section('head_styles')
    <style>
        body {
            background: url({{asset('/img/panels/master/bg.jpg')}}) center center;
        }
    </style>
@endsection

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
                            {{ Form::bsText('name', 'Nome', null, []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsText('email', 'Email', null, []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsText('celular', 'Celular', null, []) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::bsPassword('password', 'Senha', []) }}
                        </div>

                        {{--<div class="col-md-12">--}}
                            {{--{{ Form::bsPassword('password_confirmation', 'Confirme a Senha', []) }}--}}
                        {{--</div>--}}

                        <div class="col-md-12">
                            {{ Form::bsCheckboxTermos('termos_aceitos', 'Aceito os ', false, [], [['url' => url('/termos'), 'title' => 'Termos']]) }}
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
