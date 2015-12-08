<?php

namespace MyBlog\Presenters;

/**
 * Interface MoneyFormatInterface
 *
 * 顯示不同幣別與匯率
 * @package MyBlog\Presenters
 */
interface MoneyFormatInterface
{
    public function showMoney($money);
}