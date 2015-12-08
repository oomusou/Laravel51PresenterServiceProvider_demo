<?php

namespace MyBlog\Presenters;

use Illuminate\Contracts\Foundation\Application;

class ProductPresenterFactory
{
    /** @var Application */
    protected $app;

    /**
     * ProductPresenterFactory constructor.
     * @param Application $app
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