<?php

namespace App\Providers;

use App\Http\View\Composers\AdvertComposer;
use App\Http\View\Composers\DepartmentComposer;
use App\Http\View\Composers\SubDepartmentComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['adverts.index', 'pages.index'], AdvertComposer::class);
        View::composer(['pages.index', 'items.create'], SubDepartmentComposer::class);
        View::composer(['partials.nav'], DepartmentComposer::class);
    }
}
