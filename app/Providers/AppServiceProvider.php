<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('auresMethod', function ($value = null) {
            $value = str_replace('"', '', $value);
            $value = str_replace("'", '', $value);
            $value = strtoupper($value);

            $methods = ['DELETE', 'PATCH', 'PUT'];
            if(!in_array($value, $methods)){
                return "";
            }
            $element = '<input type="hidden" name="_method" value="' . $value . '">';
            return $element;
        });
    }
}
