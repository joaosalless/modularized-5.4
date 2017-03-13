
<tr>
    <th>
    {{ $entity->profile->getLabel('nome') }}
    <th>
    <td>
    {{ $entity->profile->present()->getNome }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('apelido') }}
    <th>
    <td>
    {{ $entity->profile->present()->getApelido }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('cpf') }}
    <th>
    <td>
    {{ $entity->profile->present()->getCpf }}
    <td>
</tr>

@if($entity->profile->data_nascimento)
    <tr>
        <th>
        {{ $entity->profile->getLabel('data_nascimento') }}
        <th>
        <td>
        {{ $entity->profile->present()->getDataNascimento }}
        <td>
    </tr>
@endif

<tr>
    <th>
    {{ $entity->profile->getLabel('sexo') }}
    <th>
    <td>
    {{ $entity->profile->present()->getSexo }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('telefone') }}
    <th>
    <td>
    {{ $entity->profile->present()->getTelefone }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('celular') }}
    <th>
    <td>
    {{ $entity->profile->present()->getCelular }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('cep') }}
    <th>
    <td>
    {{ $entity->profile->present()->getCep }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('logradouro') }}
    <th>
    <td>
    {{ $entity->profile->present()->getLogradouro }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('numero') }}
    <th>
    <td>
    {{ $entity->profile->present()->getNumero }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('complemento') }}
    <th>
    <td>
    {{ $entity->profile->present()->getComplemento }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('bairro') }}
    <th>
    <td>
    {{ $entity->profile->present()->getBairro }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('municipio') }}
    <th>
    <td>
    {{ $entity->profile->present()->getMunicipio }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('uf') }}
    <th>
    <td>
    {{ $entity->profile->present()->getUf }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->profile->getLabel('ibge') }}
    <th>
    <td>
    {{ $entity->profile->present()->getIbge }}
    <td>
</tr>

{{--<tr>--}}
    {{--<th>--}}
    {{--{{ $entity->profile->getLabel('site') }}--}}
    {{--<th>--}}
    {{--<td>--}}
    {{--{{ $entity->profile->present()->getSite }}--}}
    {{--<td>--}}
{{--</tr>--}}

{{--<tr>--}}
    {{--<th>--}}
    {{--{{ $entity->profile->getLabel('social') }}--}}
    {{--<th>--}}
    {{--<td>--}}
    {{--{{ $entity->profile->present()->getSocial }}--}}
    {{--<td>--}}
{{--</tr>--}}