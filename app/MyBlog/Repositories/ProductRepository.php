<?php


namespace App\MyBlog\Repositories;


use MyBlog\Product;

class ProductRepository
{

    /** @var Product */
    protected $product;

    /**
     * ProductRepository constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProductByHighestPrice($itemCount)
    {
        return $this->product
            ->orderBy('price')
            ->limit($itemCount)
            ->get();
    }
}