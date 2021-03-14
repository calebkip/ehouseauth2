<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;

class AuthServiceProvider extends ServiceProvider
{
   public function boot()
{
    $this->registerPolicies();
    $this->registerPostPolicies();
}

public function registerPostPolicies()
{
    Gate::define('create-post', function ($user) {
        return $user->hasAccess(['create-post']);
    });
    Gate::define('update-post', function ($user, Post $post) {
        return $user->hasAccess(['update-post']) or $user->id == $post->user_id;
    });
    Gate::define('publish-post', function ($user) {
        return $user->hasAccess(['publish-post']);
    });
    Gate::define('see-all-drafts', function ($user) {
        return $user->inRole('editor');
    });
}
}
