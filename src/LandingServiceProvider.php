<?php

namespace XMultibyte\Landing;

use Illuminate\Support\ServiceProvider;

class LandingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('landing', function ($app) {
            return new Landing();
        });

        $this->app->register(Providers\EventServiceProvider::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadPackageResources();
        $this->registerPublishable();
    }

    protected function loadPackageResources()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'landing');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'landing');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'landing');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    protected function registerPublishable()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('landing.php'),
            ], 'landing-config');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/landing'),
            ], 'landing-views');

            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('landing'),
            ], 'landing-assets');

            $this->publishes([
                __DIR__.'/../resources/lang/en/landing.php' => lang_path('en/landing.php'),
                __DIR__.'/../resources/lang/zh_CN/landing.php' => lang_path('zh_CN/landing.php'),
            ], 'landing-lang');

            $this->publishes([
                __DIR__.'/../routes/web.php' => base_path('routes/landing.php'),
            ], 'landing-routes');

            $migration_target_path = 'migrations/'.now()->format('Y_m_d_His').'_create_landings_table.php';
            $this->publishes([
                __DIR__.'/../database/migrations/create_landings_table.php' => database_path($migration_target_path),
            ], 'landing-migrations');
        }
    }
}
