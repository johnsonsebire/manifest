<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

         // Admin 
         Gate::define('Admin', function($user) {
            return $user->user_role=='admin'; 
        });

         // Staff 
         Gate::define('Staff', function($user) {
            return $user->user_role=='staff'; 
        });

         // Partner 
         Gate::define('Partner', function($user) {
            return $user->user_role=='partner'; 
        });

         // Customer 
         Gate::define('Customer', function($user) {
            return $user->user_role=='customer'; 
        });

    }
}
