<?php

namespace App\Providers;

use App\Models\Students;
use Illuminate\Support\Facades\View;
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
        //

        //database data can also be here aside from a controller to send model data
        View::share('title', 'Student List System');

        // View::composer('students.index', function($view){
        //     $view->with('students', Students::all());
        // });
    }
}
