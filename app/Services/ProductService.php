<?php

namespace App\Services;

use App\Product;
use App\Repositories\ProductRepository;

class ProductService
{
    protected $ProductService;
    public function __construct()
    {
        $this->ProductService = new ProductRepository;
    }
    public function addProduct($request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->type = $request->input('type');
        $product->brand = $request->input('brand');
        $product->number = $request->input('number');
        $product->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->photo=$name;
        }
        $product->save();
    }
    public function delete($id)
    {
        $this->ProductService->delete($id);
    }
}
