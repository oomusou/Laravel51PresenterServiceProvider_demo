<?php

namespace MyBlog\Services;

use App\MyBlog\Repositories\ProductRepository;
use Illuminate\Database\Eloquent\Collection;
use MyBlog\Presenters\ProductPresenterFactory;

class OrderService
{
    /** @var ProductPresenterFactory */
    protected $productPresenterFactory;
    /** @var ProductRepository*/
    protected $productRepository;

    /**
     * OrderService constructor.
     * @param ProductPresenterFactory $productPresenterFactory
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductPresenterFactory $productPresenterFactory,
        ProductRepository $productRepository)
    {
        $this->productPresenterFactory = $productPresenterFactory;
        $this->productRepository = $productRepository;
    }

    /**
     * 傳回最貴的產品
     *
     * @param string $lang
     * @return Collection
     */
    public function getMostExpensiveProducts($lang)
    {
        $this->productPresenterFactory->bindProductPresenter($lang);
        return $this->productRepository->getProductByHighestPrice(3);
    }
}