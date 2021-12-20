<?php

namespace App\Providers;

use App\Models\movies;
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
        $categories = $this->loadCategory();
        View::share('categories', $categories["genres"]);
    }
    function loadCategory()
    {
        $m = new movies();
        return $m->getCategoriesName();
    }
}
