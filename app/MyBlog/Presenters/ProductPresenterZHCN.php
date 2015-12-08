<?php

namespace MyBlog\Presenters;

class ProductPresenterZHCN implements MoneyFormatInterface
{
    public function showMoney($money)
    {
        $money = $money * 6;
        return 'RMB:' . $money;
    }
}