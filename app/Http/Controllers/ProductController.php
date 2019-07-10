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
        return redirect('admin/dashboard')->with(['flash_message'=>'商品新增成功！']);
    }
    public function showList()
    {
        $list=new ProductRepository;
        $list=$list->getAll();
        return view('product.list_product')->with(['list'=>$list]);
    }
    public function delete($id)
    {
        $this->product->delete($id);
        return redirect('admin/product/list')->with(['flash_message'=>'商品刪除成功！']);
    }
}
