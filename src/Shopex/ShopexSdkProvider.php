<?php
namespace Shopex;

use Illuminate\Support\ServiceProvider;

class ShopexSdkProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishing();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../../config/shopex_sdk.php' => config_path('shopex_sdk.php')], 'shopex-platform-sdk-config');
        }
    }
}
