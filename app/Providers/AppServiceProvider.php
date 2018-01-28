<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'RainLab\Blog\Models\Post' => 'App\Models\Post',
            'am\Attachments\Models\Publication' => 'App\Models\Publication',
            'am\Attachments\Models\PressRelease' => 'App\Models\PressRelease',
            'am\Variables\Models\Slide' => 'App\Models\Slide',
            'am\Variables\Models\Sponsor' => 'App\Models\Sponsor',
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
