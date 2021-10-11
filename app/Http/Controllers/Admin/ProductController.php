<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Contracts;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreProductFormRequest;
use Intervention\Image\Facades\Image;

class ProductController extends BaseController
{
    protected $productRepository;

    public function __construct(ProductContract $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->listProducts();

        $this->setPageTitle('Products', 'Products List');
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $this->setPageTitle('Products', 'Create Product');
        return view('admin.products.create');
    }

    public function store(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');

        if (request('image') != null) {
            $params['image'] = Product::saveImageUrl(request('image'));
        }

        $product = $this->productRepository->createProduct($params);
        if (!$product) {
            return $this->responseRedirectBack('Error occurred while creating product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product added successfully', 'success', false, false);
    }

    public function edit($id)
    {
        $product = $this->productRepository->findProductById($id);

        $this->setPageTitle('Products', 'Edit Product');
        return view('admin.products.edit', compact('product'));
    }

    public function update(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');

        if (request('image') != null) {
            $params['image'] = Product::saveImageUrl(request('image'));
        }

        $product = $this->productRepository->updateProduct($params);

        if (!$product) {
            return $this->responseRedirectBack('Error occurred while updating product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product updated successfully', 'success', false, false);
    }

    public function delete($id)
    {
        $product = $this->productRepository->deleteProduct($id);

        if (!$product) {
            return $this->responseRedirectBack('Error occurred while deleting category.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Category deleted successfully', 'success', false, false);
    }

}


