<?php

// Para la autenticación de inicio de sesión, se utiliza laravel sanctum el cual permite el acceso por medio de tokens o sesiones

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'sanctum'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |-------------------------------------------------------------------------- 
    | Guardas de Autenticación
    |-------------------------------------------------------------------------- 
    |
    | A continuación, puedes definir cada guarda de autenticación para tu aplicación.
    | Por supuesto, se ha definido una excelente configuración predeterminada 
    | que utiliza el almacenamiento de sesiones junto con el proveedor de usuarios de Eloquent.
    |
    | Todas las guardas de autenticación tienen un proveedor de usuarios, 
    | que define cómo se recuperan los usuarios de tu base de datos u otro 
    | sistema de almacenamiento utilizado por la aplicación. 
    | Normalmente, se utiliza Eloquent.
    |
    | Soportado: "session"

    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'sanctum' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

   /*
    |-------------------------------------------------------------------------- 
    | Proveedores de Usuarios
    |-------------------------------------------------------------------------- 
    |
    | Todas las guardas de autenticación tienen un proveedor de usuarios, 
    | que define cómo se recuperan los usuarios de tu base de datos u otro 
    | sistema de almacenamiento utilizado por la aplicación. 
    | Normalmente, se utiliza Eloquent.
    |
    | Si tienes múltiples tablas o modelos de usuarios, puedes configurar múltiples 
    | proveedores para representar el modelo o la tabla. Luego, estos proveedores 
    | pueden ser asignados a cualquier guarda de autenticación adicional que hayas definido.
    |
    | Soportado: "database", "eloquent"
    |
    */


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
            'table' => 'usuarios' // Se define la tabla usuarios para recuperar los datos de ingreso
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | These configuration options specify the behavior of Laravel's password
    | reset functionality, including the table utilized for token storage
    | and the user provider that is invoked to actually retrieve users.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | window expires and users are asked to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
