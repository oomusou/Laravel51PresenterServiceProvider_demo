<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use MyBlog\Services\OrderService;

class ProductController extends Controller
{
    /** @var OrderService */
    protected $orderService;

    /**
     * ProductController constructor.
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lang = $request->input('lang');

        $products = $this->orderService->getMostExpensiveProducts($lang);

        return view('products.index', compact('products'));
    }
}
