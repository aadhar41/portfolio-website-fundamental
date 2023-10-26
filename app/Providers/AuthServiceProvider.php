<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        /**
         * create post
         * edit post
         * delete post
         */

        // Gate::define('create-post', function() {
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('edit-post', function() {
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('delete-post', function() {
        //     return Auth::user()->is_admin;
        // });
    }
}
