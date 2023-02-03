<?php

namespace App\Providers;

use App\Models\Student;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Components\mycomponent\header;
use App\View\Components\mycomponent\content;
use App\View\Components\mycomponent\footer;
use App\View\Components\mycomponent\sidebar;

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

        Blade::component('header',header::class);
        Blade::component('footer',footer::class);
        Blade::component('sidebar',sidebar::class);
        Blade::component('content',content::class);
    }    
}
