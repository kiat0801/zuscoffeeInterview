<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->listProducts();
        $user = Auth::id();

        return view('site.pages.homepage', compact('products', 'user'));
    }

    public function show($id)
    {
        $user = Auth::id();
        $product = $this->productRepository->findProductById($id);

        return view('site.pages.product', compact('product', 'user'));
    }

}
