<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
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
    }
}
