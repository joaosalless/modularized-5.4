<?php

return array_merge(

    Lang::get('companies::company'),
    Lang::get('persons::person'),
    Lang::get('abstracts_entities::entity_male'),

    [
        'entityName'                    => 'Usuário',
        'entityNamePlural'              => 'Usuários',
        'entityShortName'               => 'Cliente',
        'entityShortNamePlural'         => 'Clientes',
        'user_id'                       => 'ID do Usuário',
        'profile_id'                    => 'ID do Perfil',
        'profile_type'                  => 'Tipo de Perfil',
        'App\Domains\Companies\Company' => 'Pessoa Jurídica',
        'App\Domains\Persons\Person'    => 'Pessoa Física',
    ]
);