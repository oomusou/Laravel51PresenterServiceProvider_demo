<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MyBlog\Presenters\ProductPresenterFactory;

class ProductPresenterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @param ProductPresenterFactory $productPresenterFactory
     */
    public function boot(ProductPresenterFactory $productPresenterFactory)
    {
        $productPresenterFactory->bindProductPresenter('en-us');
    }

    /**
     * Register the application services.
     *ｅ
     */
    public function register()
    {
    }
}
