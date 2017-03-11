
<div class="col-md-6">
    {{ Form::bsText('profile[razao_social]', 'Razão social', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsCnpj('profile[cnpj]', 'CNPJ', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText('profile[nome_fantasia]', 'Nome fantasia', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText('profile[inscricao_estadual]', 'Inscrição estadual', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsDate('profile[data_fundacao]', 'Data de fundação', $entity->profile->data_fundacao->format('d/m/Y'), []) }}
</div>


<div class="col-md-6">
    {{ Form::bsPhone('profile[telefone]', 'Telefone', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsPhone('profile[celular]', 'Celular', null, []) }}
</div>