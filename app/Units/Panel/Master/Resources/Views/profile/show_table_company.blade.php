<tr>
    <th>
    {{ $entity->getLabel('razao_social') }}
    <th>
    <td>
    {{ $entity->present()->getRazaoSocial }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('nome_fantasia') }}
    <th>
    <td>
    {{ $entity->present()->getNomeFantasia }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('cnpj') }}
    <th>
    <td>
    {{ $entity->present()->getCnpj }}
    <td>
</tr>

@if($entity->data_fundacao)
    <tr>
        <th>
        {{ $entity->getLabel('data_fundacao') }}
        <th>
        <td>
        {{ $entity->present()->getDataFundacao }}
        <td>
    </tr>
@endif

<tr>
    <th>
    {{ $entity->getLabel('inscricao_estadual') }}
    <th>
    <td>
    {{ $entity->present()->getInscricaoEstadual }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('telefone') }}
    <th>
    <td>
    {{ $entity->present()->getTelefone }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('celular') }}
    <th>
    <td>
    {{ $entity->present()->getCelular }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('cep') }}
    <th>
    <td>
    {{ $entity->present()->getCep }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('logradouro') }}
    <th>
    <td>
    {{ $entity->present()->getLogradouro }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('numero') }}
    <th>
    <td>
    {{ $entity->present()->getNumero }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('complemento') }}
    <th>
    <td>
    {{ $entity->present()->getComplemento }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('observacao') }}
    <th>
    <td>
    {{ $entity->present()->getObservacao }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('bairro') }}
    <th>
    <td>
    {{ $entity->present()->getBairro }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('municipio') }}
    <th>
    <td>
    {{ $entity->present()->getMunicipio }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('uf') }}
    <th>
    <td>
    {{ $entity->present()->getUf }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('ibge') }}
    <th>
    <td>
    {{ $entity->present()->getIbge }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('site') }}
    <th>
    <td>
    {{ $entity->present()->getSite }}
    <td>
</tr>

<tr>
    <th>
    {{ $entity->getLabel('social') }}
    <th>
    <td>
    {{ $entity->present()->getSocial }}
    <td>
</tr>

@if($entity->deleted_at)
    <tr>
        <th>
        {{ $entity->getLabel('deleted_at') }}
        <th>
        <td>
        {{ $entity->present()->getDeletedAt }}
        <td>
    </tr>
@endif

@if($entity->created_at)
    <tr>
        <th>
        {{ $entity->getLabel('created_at') }}
        <th>
        <td>
        {{ $entity->present()->getCreatedAt }}
        <td>
    </tr>
@endif

@if($entity->updated_at)
    <tr>
        <th>
        {{ $entity->getLabel('updated_at') }}
        <th>
        <td>
        {{ $entity->present()->getUpdatedAt }}
        <td>
    </tr>
@endif