<div class="col-md-6">
    {{ Form::bsCep($nameArray ? $nameArray.'[cep]' : 'cep', 'Cep', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsSelectUf($nameArray ? $nameArray.'[uf]' : 'uf', 'Estado', null, []) }}
</div>


<div class="col-md-12">
    {{ Form::bsText($nameArray ? $nameArray.'[logradouro]' : 'logradouro', 'Logradouro', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText($nameArray ? $nameArray.'[numero]' : 'numero', 'Numero', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText($nameArray ? $nameArray.'[complemento]' : 'complemento', 'Complemento', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText($nameArray ? $nameArray.'[bairro]' : 'bairro', 'Bairro', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText($nameArray ? $nameArray.'[municipio]' : 'municipio', 'Município', null, []) }}
</div>