<?php

declare(strict_types=1);

use Hyperf\Session\Handler;
use Hyperf\Stringable\Str;

return [
    /*
    |--------------------------------------------------------------------------
    | Session Driver
    |--------------------------------------------------------------------------
    |
    | This option determines the default session driver that is utilized for
    | incoming requests. Laravel Hyperf supports a variety of storage options to
    | persist session data.
    |
    | Supported: DatabaseHandler, FileHandler, RedisHandler, NullHandler
    |
    */
    'handler' => Handler\FileHandler::class,

    'options' => [
        /*
        |--------------------------------------------------------------------------
        | Session File Location
        |--------------------------------------------------------------------------
        |
        | When utilizing the "file" session driver, the session files are placed
        | on disk. The default storage location is defined here; however, you
        | are free to provide another location where they should be stored.
        |
        */

        'path' => storage_path('framework/sessions'),

        /*
        |--------------------------------------------------------------------------
        | Session Database Connection
        |--------------------------------------------------------------------------
        |
        | When using the "database" or "redis" session drivers, you may specify a
        | connection that should be used to manage these sessions. This should
        | correspond to a connection in your database configuration options.
        |
        */

        'connection' => env('SESSION_CONNECTION', 'default'),

        /*
        |--------------------------------------------------------------------------
        | Session Database Table
        |--------------------------------------------------------------------------
        |
        | When using the "database" session driver, you may specify the table to
        | be used to store sessions. Of course, a sensible default is defined
        | for you; however, you're welcome to change this to another table.
        |
        */

        'table' => env('SESSION_TABLE', 'sessions'),

        /*
        |--------------------------------------------------------------------------
        | Session Lifetime
        |--------------------------------------------------------------------------
        |
        | Here you may specify the number of minutes that you wish the session
        | to be allowed to remain idle before it expires. If you want them
        | to expire immediately when the browser is closed then you may
        | indicate that via the expire_on_close configuration option.
        |
        */

        'gc_maxlifetime' => env('SESSION_LIFETIME', 120),

        /*
        |--------------------------------------------------------------------------
        | Session Cookie Name
        |--------------------------------------------------------------------------
        |
        | Here you may change the name of the session cookie that is created by
        | the framework. Typically, you should not need to change this value
        | since doing so does not grant a meaningful security improvement.
        |
        */

        'session_name' => env(
            'SESSION_COOKIE',
            Str::slug(env('APP_NAME', 'laravel_hyperf'), '_') . '_session'
        ),

        /*
        |--------------------------------------------------------------------------
        | Session Cookie Domain
        |--------------------------------------------------------------------------
        |
        | This value determines the domain and subdomains the session cookie is
        | available to. By default, the cookie will be available to the root
        | domain and all subdomains. Typically, this shouldn't be changed.
        |
        */

        'domain' => env('SESSION_DOMAIN'),

        /*
        |--------------------------------------------------------------------------
        | Session Cookie Lifetime
        |--------------------------------------------------------------------------
        |
        | This value determines the lifetime of the session cookie in seconds.
        |
        */

        'cookie_lifetime' => env('SESSION_COOKIE_LIFETIME', 5 * 60 * 60),

        /*
        |--------------------------------------------------------------------------
        | Same-Site Cookies
        |--------------------------------------------------------------------------
        |
        | This option determines how your cookies behave when cross-site requests
        | take place, and can be used to mitigate CSRF attacks. By default, we
        | will set this value to "lax" to permit secure cross-site requests.
        |
        | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
        |
        | Supported: "lax", "strict", "none", null
        |
        */
        'cookie_same_site' => env('SESSION_SAME_SITE', 'lax'),
    ],
];
