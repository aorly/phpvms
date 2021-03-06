<?php

/**
 * DO NOT EDIT THIS OR ANY OF THE CONFIG FILES DIRECTLY
 *
 * Set your override options in the config.php file that's in the root of
 * your install. Otherwise, any changes here will get overridden in an update!
 */

return [
    'name' => env('PHPVMS_VA_NAME', 'phpvms'),
    'env' => env('APP_ENV', 'dev'),
    'debug' => env('APP_DEBUG', true),
    'url' => env('APP_URL', 'http://localhost'),
    'version' => '7.0.0',

    'locale' => env('APP_LOCALE', 'en'),
    'fallback_locale' => 'en',

    # This sends install and vaCentral specific information to help with
    # optimizations and figuring out where slowdowns might be happening
    'analytics' => true,

    #
    # Anything below here won't need changing and could break things
    #

    # DON'T CHANGE THIS OR ELSE YOUR TIMES WILL BE MESSED UP!
    'timezone' => 'UTC',

    # Is the default key cipher. Needs to be changed, otherwise phpVMS will think
    # that it isn't installed. Doubles as a security feature, so keys are scrambled
    'key' => env('APP_KEY', 'base64:zdgcDqu9PM8uGWCtMxd74ZqdGJIrnw812oRMmwDF6KY='),
    'cipher' => 'AES-256-CBC',

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */
        Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,
        Laracasts\Flash\FlashServiceProvider::class,
        Prettus\Repository\Providers\RepositoryServiceProvider::class,
        SebastiaanLuca\Helpers\Methods\GlobalHelpersServiceProvider::class,
        SebastiaanLuca\Helpers\Collections\CollectionMacrosServiceProvider::class,
        Toin0u\Geotools\GeotoolsServiceProvider::class,
        Jackiedo\Timezonelist\TimezonelistServiceProvider::class,
        Irazasyed\LaravelGAMP\LaravelGAMPServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\BroadcastServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Nwidart\Modules\LaravelModulesServiceProvider::class,
    ],

    'aliases' => [
        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Carbon' => \Carbon\Carbon::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Flash' => Laracasts\Flash\Flash::class,
        'Form' => Collective\Html\FormFacade::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Geotools' => Toin0u\Geotools\Facade\Geotools::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Utils' => App\Facades\Utils::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'Version' => PragmaRX\Version\Package\Facade::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Yaml' => Symfony\Component\Yaml\Yaml::class,

        # ENUMS
        'GenericState' => App\Models\Enums\GenericState::class,
        'UserState' => App\Models\Enums\UserState::class,
        'PirepSource' => App\Models\Enums\PirepSource::class,
        'PirepState' => App\Models\Enums\PirepState::class,
        'PirepStatus' => App\Models\Enums\PirepStatus::class,
    ],
];
