<?php

namespace App\Repositories;

use App\Product;
use Illuminate\Support\Facades\File;
class ProductRepository
{
    protected $ProductRepository;
    public function __construct()
    {
        $this->ProductRepository = new Product;
    }
    public function getAll()
    {
        return $this->ProductRepository->get();
    }
    public function delete($id)
    {   
        $name=$this->ProductRepository->where('id', $id)->first();
        $image_path='images'.'/'.$name->photo;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        return $this->ProductRepository->where('id', $id);
    }
}
