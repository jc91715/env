<?php namespace Jc91715\Env;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {


    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        // Bind any implementations.

        $this->registerCommand();

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {

        return [];
    }



    private function registerCommand() {

        $this->app->singleton('command.make.env', function ($app) {
            return $app['Jc91715\Env\Commands\EnvCommand'];
        });

        $this->commands('command.make.env');

    }


}
