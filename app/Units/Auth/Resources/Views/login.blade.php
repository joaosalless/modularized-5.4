@extends("{$panel->unitAlias()}::layouts.auth")


@section('content')

    <div class="container">

        <div class="overlay"></div>

        {!! Form::open([
            'route'  => ["{$panel->authRouteAlias()}.login", 'panel' => $panel->authProvider()],
            'method' => 'post',
        ])!!}
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default panel-shadow">
                    <div class="panel-heading">Login de {{ $panel->makeGuardModel()->getEntityName() }}</div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12">
                                @include('alert::messages')
                            </div>

                            <div class="col-md-12">
                                {{ Form::bsText('email', 'Email', $panel->makeGuardModel()->testUser()['email'], []) }}
                            </div>

                            <div class="col-md-12">
                                {{ Form::bsPassword('password', 'Senha', []) }}
                            </div>

                            <div class="col-md-12">
                                {{ Form::bsCheckbox('remember', 'Lembrar-me ', 1, []) }}
                            </div>
                        </div>
                    </div>

                    <div class="panel-body" style="border-top: 1px solid #ddd">
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::bsBtnSubmit('btnLogin', trans("{$panel->unitAlias()}::panel.login"), ['class' => 'btn btn-primary']) }}
                                <a class="btn btn-link pull-right" href="{{ $panel->resetPasswordUrl() }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
