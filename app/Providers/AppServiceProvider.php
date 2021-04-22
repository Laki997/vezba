<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Movie;
use Illuminate\Support\Facades\View;

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
        $movies = Movie::orderBy('godina','desc')->take(5)->get();
        View::share('movies',$movies);

    }
}
