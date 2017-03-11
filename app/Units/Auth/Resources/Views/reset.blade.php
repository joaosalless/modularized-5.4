@extends('auth::layouts.default')

@section('content')
    <div class="container">

        <div class="overlay"></div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::open([
                    'route'  => "{$panel->authRouteAlias()}.password.reset",
                    'method' => 'post',
                    'files'  => false,
                    ])
                !!}
                <div class="panel panel-default">

                    <div class="panel-heading">Redefinir senha para {{ $panel->makeGuardModel()->getEntityName() }}</div>

                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12">
                                @include('alert::messages')
                            </div>

                            {{ Form::hidden('token', $token) }}

                            <div class="col-md-12">
                                {{ Form::bsText('email', 'Email', null, []) }}
                            </div>

                            <div class="col-md-12">
                                {{ Form::bsPassword('password', 'Senha', []) }}
                            </div>

                            <div class="col-md-12">
                                {{ Form::bsPassword('password_confirmation', 'Confirme a Senha', []) }}
                            </div>

                        </div>
                    </div>

                    <div class="panel-body" style="border-top: 1px solid #ddd">
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::bsBtnSubmit('btnResetPassword', 'Redefinir senha', ['class' => 'btn btn-primary btn-block']) }}
                            </div>
                        </div>
                    </div>

                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
