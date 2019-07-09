<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddProduct;
use App\Services\ProductService;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $product;
    public function __construct()
    {
        $this->product=new ProductService;
    }
    public function addProduct(AddProduct $request)
    {
        $this->product->addProduct($request);
        return redirect('admin/dashboard');
    }
}
