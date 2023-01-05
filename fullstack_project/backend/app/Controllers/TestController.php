<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class TestController extends BaseController
{
    public function index()
    {
        return view('/pages/home');
    }
    public function about()
    {
        return view('/pages/about');
    }
    public function productList()
    {
        $model =  new ProductModel();
        $data = [
            'products' => $model->paginate(5),
            'pager' => $model->pager,
        ];
        return view('pages/list', $data);
    }
}
