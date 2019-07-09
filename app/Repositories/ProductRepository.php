<?php

namespace App\Repositories;

use App\Product;

class ProductRepository
{   
    protected $ProductRepository;
    public function __construct()
    {
        $this->ProductRepository = new Product;
    }
}