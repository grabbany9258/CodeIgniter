<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $mymodel = new ProductModel();
        $data['products'] = $mymodel->findAll();
        //print_r($data);
        $data['title'] = "My products page";
        return view('products/products_list', $data);
    }
}
