<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard'     => 'master_web',
        'passwords' => 'master',
        'provider'  => 'master',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [

        /*
        |--------------------------------------------------------------------------
        | Cliente Users
        |--------------------------------------------------------------------------
        */
        'customer_web' => [
            'driver'   => 'session',
            'provider' => 'customer',
        ],

        'customer_api' => [
            'driver'   => 'jwt',
            'provider' => 'customer',
        ],

        /*
        |--------------------------------------------------------------------------
        | Master Users
        |--------------------------------------------------------------------------
        */
        'master_web'  => [
            'driver'   => 'session',
            'provider' => 'master',
        ],

        'master_api' => [
            'driver'   => 'jwt',
            'provider' => 'master',
        ],

        /*
        |--------------------------------------------------------------------------
        | Dev Users
        |--------------------------------------------------------------------------
        */
        'dev_web'  => [
            'driver'   => 'session',
            'provider' => 'dev',
        ],

        'dev_api' => [
            'driver'   => 'jwt',
            'provider' => 'dev',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or entities you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [

        'customer' => [
            'driver' => 'eloquent',
            'model'  => \App\Domains\Users\Customer\User::class,
        ],

        'master' => [
            'driver' => 'eloquent',
            'model'  => \App\Domains\Users\Master\User::class,
        ],

        'dev' => [
            'driver' => 'eloquent',
            'model'  => \App\Domains\Users\Master\User::class,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [

        'customer' => [
            'provider' => 'customer',
            'table'    => 'customer_password_resets',
            'expire'   => 60,
        ],

        'master' => [
            'provider' => 'master',
            'table'    => 'master_password_resets',
            'expire'   => 60,
        ],

        'dev' => [
            'provider' => 'master',
            'table'    => 'master_password_resets',
            'expire'   => 60,
        ],

    ],

];
