<?php

namespace MyBlog\Presenters;

class ProductPresenterDefault implements MoneyFormatInterface
{
    public function showMoney($money)
    {
        return 'USD:' . $money;
    }
}