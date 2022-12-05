<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Myhome extends BaseController
{
    public function index()
    {
        return view('Home');
    }
    public function about()
    {
        return view('about_us');
    }
    public function contact()
    {
        return view('contact_us');
    }
}
