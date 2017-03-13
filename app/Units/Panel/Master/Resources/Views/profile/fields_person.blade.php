<div class="col-md-6">
    {{ Form::bsText('profile[nome]', $entity->getLabel('nome'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsText('profile[apelido]', $entity->getLabel('apelido'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsCpf('profile[cpf]', $entity->getLabel('cpf'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsDate('profile[data_nascimento]', $entity->getLabel('data_nascimento'), $entity->present()->getDataNascimentoDate, []) }}
</div>

{{--<div class="col-md-6">--}}
    {{--{{ Form::bsToggle('profile[sexo]', $entity->getLabel('sexo'), ['on' => 'M', 'off' => 'F'], $entity->sexo, [--}}
        {{--'data-on'   => '<i class="fa fa-fw fa-male"></i> Masculino',--}}
        {{--'data-off'  => '<i class="fa fa-fw fa-female"></i> Feminino',--}}
        {{--'data-size' => 'normal',--}}
    {{--]) }}--}}
{{--</div>--}}

<div class="col-md-6">
    {{ Form::bsSelect('profile[sexo]', $entity->getLabel('sexo'), [
        'F' => $entity->getLabel('female'),
        'M' => $entity->getLabel('male')
    ], $entity->sexo, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsPhone('profile[telefone]', $entity->getLabel('telefone'), null, []) }}
</div>

<div class="col-md-6">
    {{ Form::bsPhone('profile[celular]', $entity->getLabel('celular'), null, []) }}
</div>