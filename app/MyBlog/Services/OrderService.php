<?php


namespace MyBlog\Services;


use App\MyBlog\Repositories\ProductRepository;
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


    public function getMostExpensiveProducts($lang)
    {
        $this->productPresenterFactory->bindProductPresenter($lang);
        $products = $this->productRepository->getProductByHighestPrice(3);

        return $products;
    }
}