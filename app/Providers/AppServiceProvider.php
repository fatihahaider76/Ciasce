<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin',function(User $user){
            return $user->role === "admin";
        });
        Gate::define('Myprofile',function(User $user,$user_profile){
            return $user->id === $user_profile;
        });
        Gate::define('update-posts',function(User $user,$targetuser){
            return $user->id === $targetuser;
        });

        // Gate::before(function (User $user){ // before gate hum user login ha ka nhi ys ka lea use kar sktye ha. ye hmarye define method sa pahlye run ho ga.
        //     echo "Before is runing";
        // });

        // Gate::after(function (User $user){ // after gate hum tab use karte ha jab define method complete run ho jae phir koi action perform karwana ho to karwa sktye ha.
        //     echo "After is runing";
        // });
    }
}
