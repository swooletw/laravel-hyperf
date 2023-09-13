<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Hyperf'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => environment()->get(),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => environment()->isDebug(),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'Asia/Taipei',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'zh-CN',

    'providers' => [
        SwooleTW\Hyperf\Foundation\Providers\FoundationServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\AppServiceProvider::class,
        App\Providers\EventServiceProvider::class,
    ],

    'aliases' => [
        'App' => SwooleTW\Hyperf\Support\Facades\App::class,
        'Cache' => SwooleTW\Hyperf\Support\Facades\Cache::class,
        'Config' => SwooleTW\Hyperf\Support\Facades\Config::class,
        'Cookie' => SwooleTW\Hyperf\Support\Facades\Cookie::class,
        'Crypt' => SwooleTW\Hyperf\Support\Facades\Crypt::class,
        'DB' => SwooleTW\Hyperf\Support\Facades\DB::class,
        'File' => SwooleTW\Hyperf\Support\Facades\File::class,
        'Log' => SwooleTW\Hyperf\Support\Facades\Log::class,
        'Request' => SwooleTW\Hyperf\Support\Facades\Request::class,
        'Response' => SwooleTW\Hyperf\Support\Facades\Response::class,
        'Translator' => SwooleTW\Hyperf\Support\Facades\Translator::class,
        'Validator' => SwooleTW\Hyperf\Support\Facades\Validator::class,
        'JWT' => SwooleTW\Hyperf\Support\Facades\JWT::class,
        'Auth' => SwooleTW\Hyperf\Support\Facades\Auth::class,
        'Hash' => SwooleTW\Hyperf\Support\Facades\Hash::class,
        'Environment' => SwooleTW\Hyperf\Support\Facades\Environment::class,
    ],
];
