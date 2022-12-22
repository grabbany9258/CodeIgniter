<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // echo view('includes/header');
        // echo view('includes/navbar');
        $data['title'] = "my home page";
        return view('welcome_message', $data);
        // echo view('includes/footer');
    }

    public function about()
    {
        // echo view('includes/header');
        // echo view('includes/navbar');
        $data['title'] = "my home page";
        return view('about_us', $data);
        // echo view('includes/footer');
    }

    public function contact()
    {
        // echo view('includes/header');
        // echo view('includes/navbar');
        $data['title'] = "my home page";
        return view('contact_us', $data);
        // echo view('includes/footer'); 
    }

    // public function products()
    // {
    //     $data['title'] = "my home page";
    //     return view('products/products_list', $data);
    // }
}
