<?php

namespace MyBlog\Presenters;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\App;

class ProductPresenterFactory
{
    /** @var Application */
    private $app;

    /**
     * ProductPresenterFactory constructor.
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }


    /**
     * @param string $lang
     */
    public function bindProductPresenter($lang)
    {
        if ($lang == 'zh-tw') {
            $this->app->bind(MoneyFormatInterface::class, ProductPresenterZHTW::class);
        } elseif ($lang == 'zh-cn') {
            $this->app->bind(MoneyFormatInterface::class, ProductPresenterZHCN::class);
        } else {
            $this->app->bind(MoneyFormatInterface::class, ProductPresenterDefault::class);
        }
    }
}