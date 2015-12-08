<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MyBlog\Presenters\ProductPresenterFactory;

class ProductPresenterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @param ProductPresenterFactory $productPresenterServiceProvider
     */
    public function boot(ProductPresenterFactory $productPresenterServiceProvider)
    {
        $productPresenterServiceProvider->bindProductPresenter('en-us');
    }

    /**
     * Register the application services.
     *
     */
    public function register()
    {

    }

}
