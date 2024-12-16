<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('matricule', function ($attribute, $value, $parameters, $validator) {
            // Your validation logic for matricule goes here
            // For simplicity, we'll just check if it's a numeric value
            return is_numeric($value);
        });

        Validator::extend('matricule_unique', function ($attribute, $value, $parameters, $validator) {
            // Check if the matricule is unique in the "utilisateurs" table
            return !\App\Models\Utilisateurs::where('matricule', $value)->exists();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
