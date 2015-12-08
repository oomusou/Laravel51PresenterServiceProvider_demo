<?php


namespace MyBlog\Presenters;


use Illuminate\Support\Facades\App;

class ProductPresenterFactory
{

    /**
     * @param string $lang
     */
    public function bindProductPresenter($lang)
    {
        if ($lang == 'zh-tw') {
            App::bind(MoneyFormatInterface::class, ProductPresenterZHTW::class);
        } elseif ($lang == 'zh-cn') {
            App::bind(MoneyFormatInterface::class, ProductPresenterZHCN::class);
        } else {
            App::bind(MoneyFormatInterface::class, ProductPresenterDefault::class);
        }
    }

}