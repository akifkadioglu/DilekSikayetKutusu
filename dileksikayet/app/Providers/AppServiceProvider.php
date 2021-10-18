<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        $data = User::first();
        if (empty($data)) {
            $data = new User();
            $data->username = "ahmetveysel";
            $data->password = Hash::make("gizli123");
            $data->save();
        }
    }
}
