<?php namespace Aproskurnov\Bem;
/**
 * file BemServiceProvider.php.
 * created: 17.03.15
 * @author: Aleksey Proskurnov
 * @copyright Copyright (c) 2015, Aleksey Proskurnov
 */

use Illuminate\Support\ServiceProvider;

class BemServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('bem', function () {
            return new Bem();
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/bem.php' => config_path('bem.php')
        ], 'config');
    }

}