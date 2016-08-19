<?php

namespace gerenciaProjeto\Providers;

use Illuminate\Support\ServiceProvider;

class gerenciaProjetoRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \gerenciaProjeto\Repositories\ClientRepository::class,
            \gerenciaProjeto\Repositories\ClientRepositoryEloquent::class
        );
    }
}
