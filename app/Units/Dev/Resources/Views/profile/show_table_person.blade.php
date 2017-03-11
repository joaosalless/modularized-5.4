<tr>
    <th>
        Nome
    <th>
    <td>
    {{ $entity->profile->nome }}
    <td>
</tr>


<tr>
    <th>
        CPF
    <th>
    <td>
    {{ $entity->profile->cpf }}
    <td>
</tr>


<tr>
    <th>
        Apelido
    <th>
    <td>
    {{ $entity->profile->apelido }}
    <td>
</tr>


<tr>
    <th>
        Sexo
    <th>
    <td>
    {{ $entity->profile->sexo == 'M' ? 'Masculino' : 'Feminino' }}
    <td>
</tr>


<tr>
    <th>
        Data de nascimento
    <th>
    <td>
    {{ $entity->profile->data_nascimento->format('d/m/Y') }}
    <td>
</tr>


<tr>
    <th>
        Telefone
    <th>
    <td>
    {{ $entity->profile->telefone }}
    <td>
</tr>


<tr>
    <th>
        Celular
    <th>
    <td>
    {{ $entity->profile->celular }}
    <td>
</tr>


<tr>
    <th>
        CEP
    <th>
    <td>
    {{ $entity->profile->cep }}
    <td>
</tr>


<tr>
    <th>
        Logradouro
    <th>
    <td>
    {{ $entity->profile->logradouro }}
    <td>
</tr>


<tr>
    <th>
        Número
    <th>
    <td>
    {{ $entity->profile->numero }}
    <td>
</tr>


<tr>
    <th>
        Complemento
    <th>
    <td>
    {{ $entity->profile->complemento }}
    <td>
</tr>


<tr>
    <th>
        Bairro
    <th>
    <td>
    {{ $entity->profile->bairro }}
    <td>
</tr>


<tr>
    <th>
        Município
    <th>
    <td>
    {{ $entity->profile->municipio }}
    <td>
</tr>


<tr>
    <th>
        UF
    <th>
    <td>
    {{ $entity->profile->uf }}
    <td>
</tr>