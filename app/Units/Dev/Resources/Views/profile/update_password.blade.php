<div class="col-md-12">
    <h4>Atualizar Senha</h4>
    <hr>
</div>

<div class="col-md-12">
    <p>
        Sua senha foi atualizada pela última vez <strong>{{ $entity->password_updated_at->diffForHumans() }}</strong>
    </p>
    <hr>
</div>

{!! Form::open([
    'route'  => "{$panel->routeAlias()}.profile.update_password",
    'method' => 'post',
    ])
!!}

<div class="col-md-6">
    {{ Form::bsPassword('password', 'Nova senha', []) }}
</div>

<div class="col-md-6">
    {{ Form::bsPassword('password_confirmation', 'Confirme a nova senha', []) }}
</div>

<div class="col-md-12">
    <hr>
    {{ Form::bsBtnSubmit('btnUpdatePassword', 'Atualizar', ['class' => 'btn btn-primary pull-right']) }}
</div>

{!! Form::close() !!}