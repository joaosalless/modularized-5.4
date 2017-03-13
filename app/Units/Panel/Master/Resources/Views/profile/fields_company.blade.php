
<div class="col-md-6">
    {{ Form::bsText('profile[nome_fantasia]', $entity->getLabel('nome_fantasia'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('profile[razao_social]', $entity->getLabel('razao_social'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('profile[cnpj]', $entity->getLabel('cnpj'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsDate('profile[data_fundacao]', $entity->getLabel('data_fundacao'), $entity->present()->getDataFundacao, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('inscricao_estadual', $entity->getLabel('inscricao_estadual'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('telefone', $entity->getLabel('telefone'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('celular', $entity->getLabel('celular'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('profile[site]', $entity->getLabel('site'), null, []) }}
</div>