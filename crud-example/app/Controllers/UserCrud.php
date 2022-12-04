<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    // show users list
    public function index()
    {
        $userObj1 = new UserModel();
        $data['MyUsers'] = $userObj1->orderBy('id', 'DESC')->findAll();
        return view('user_display', $data);
    }
    // add user form
    public function create()
    {
        return view('add_user');
    }
    // insert data
    public function store()
    {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users'));
    }
}
