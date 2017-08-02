<?php
/**
 * Created by PhpStorm.
 * User: Hoangduy
 * Date: 02/08/2017
 * Time: 02:02 CH
 */
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
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

    public function register()
    {
        foreach (glob(app_path() . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}