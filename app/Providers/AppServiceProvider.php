<?php

namespace App\Providers;

use App\Models\PersonalAccessToken;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Spatie\Permission\PermissionRegistrar;
use Stancl\Tenancy\Events\TenancyBootstrapped;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(TenancyBootstrapped::class, function (TenancyBootstrapped $event) {
            PermissionRegistrar::$cacheKey = 'spatie.permission.cache.tenant.' . $event->tenancy->tenant->id;
        });

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
        Sanctum::authenticateAccessTokensUsing(static function (PersonalAccessToken $accessToken, bool $is_valid) {
            return $accessToken->expired_at ? $is_valid && !$accessToken->expired_at->isPast() : $is_valid;
        });
    }
}
