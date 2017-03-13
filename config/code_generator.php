<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Excludes
     |--------------------------------------------------------------------------
     */
    'excludes' => [

        'entities' => [

        ],

        'class_directories' => [
            'Contracts',
            'Criteria',
            'Database',
            'Listeners',
            'Notifications',
            'Presenters',
            'Providers',
            'Repositories',
            'Resources',
            'Rules',
            'Traits',
            'Transformers',
        ],

        'fields' => [

            'fillable' => [
                'id',
                'created_at',
                'deleted_at',
                'updated_at',
            ],

            'factory' => [
                'id',
                'active',
                'created_at',
                'deleted_at',
                'updated_at',
            ],

            'dates' => [

            ],

            'rules' => [
                'id',
                'created_at',
                'deleted_at',
                'updated_at',
            ],

            'transformable' => [
                'password',
            ],

            'searchable' => [
                'id',
                'password',
            ],

            'presenter_eloquent' => [
                'id',
                'used_at',
                'blocked_at',
                'activated_at',
                'created_at',
                'updated_at',
                'deleted_at',
                'password',
                'remember_token',
            ],
        ],
    ],

    /*
     |--------------------------------------------------------------------------
     | Form Fields
     |--------------------------------------------------------------------------
     */
    'form'     => [

        'uuid' => [
            'lengths' => [36],
            'formInput' => 'bsStatic',
        ],

        'fieldTypes' => [
            'default' => [
                'formInput' => 'bsText',
            ],
            'string' => [
                'formInput' => 'bsText',
            ],
            'text' => [
                'formInput' => 'bsTextarea',
            ],
            'datetime' => [
                'formInput' => 'bsDate',
            ],
            'date' => [
                'formInput' => 'bsDate',
            ],
            'time' => [
                'formInput' => 'bsDate',
            ],
            'boolean' => [
                'formInput' => 'bsCheckbox',
            ],
        ],
    ],
];
