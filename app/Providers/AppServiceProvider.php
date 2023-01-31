<?php

namespace App\Providers;

use App\Models\Student;
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
        View::share('siteTitle', 'Site Title');
        View::composer(['practice.hello', 'welcome'], function ($view) {
            $view->with('students',Student::orderBy('name')->get());
        }); 

        #View::composer(['practice.hello', 'welcome'],StudentsComposer::class);

        #View::creator(['practice.hello', 'welcome'],StudentsCreator::class);
    }    
}
