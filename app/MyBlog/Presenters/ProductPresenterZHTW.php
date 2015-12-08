<?php

namespace MyBlog\Presenters;

class ProductPresenterZHTW implements MoneyFormatInterface
{
    public function showMoney($money)
    {
        $money = $money * 30;
        return 'NTD:' . $money;
    }
}