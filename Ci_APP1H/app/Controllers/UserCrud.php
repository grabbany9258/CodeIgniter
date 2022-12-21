<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $userObj = new UserModel();
        $data['myUsers'] = $userObj->orderBy('id')->findAll();
        //print_r($data);
        return view('user_show', $data);
    }
    public function delete($id)
    {
        $userObj = new UserModel();
        $userObj->Where('id', $id)->delete($id);
        $this->response->redirect('/users');
    }
}
