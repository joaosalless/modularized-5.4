
<div class="col-md-6">
    {{ Form::bsText('profile[nome]', 'Nome', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsCpf('profile[cpf]', 'CPF', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText('profile[apelido]', 'Apelido', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsText('profile[sexo]', 'Sexo', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsDate('profile[data_nascimento]', 'Data de nascimento', $entity->profile->data_nascimento->format('d/m/Y'), []) }}
</div>


<div class="col-md-6">
    {{ Form::bsPhone('profile[telefone]', 'Telefone', null, []) }}
</div>


<div class="col-md-6">
    {{ Form::bsPhone('profile[celular]', 'Celular', null, []) }}
</div>


{{--<div class="col-md-6">--}}
    {{--{{ Form::bsText('profile[avatar]', 'Avatar', null, []) }}--}}
{{--</div>--}}


{{--<div class="col-md-6">--}}
    {{--{{ Form::bsText('profile[site]', 'Site', null, []) }}--}}
{{--</div>--}}