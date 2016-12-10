<?php

namespace App\Providers;

use App\Repositories\Invoice\InvoiceRepositoryInterface;
use App\Repositories\Invoice\InvoiceRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InvoiceRepositoryInterface::class, InvoiceRepository::class);
    }
}
