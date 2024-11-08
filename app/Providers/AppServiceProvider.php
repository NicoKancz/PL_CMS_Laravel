<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Language;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('permission-languages', function (User $user, Language $language) {
            return $user->id === $language->userId;
        });

        Gate::define('permission-categories', function (User $user, Category $category) {
            return $user->id === $category->userId;
        });

        Gate::define('permission-contents', function (User $user, Content $content) {
            return $user->id === $content->userId;
        });
    }
}
