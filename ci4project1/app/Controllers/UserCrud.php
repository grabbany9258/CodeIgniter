<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $userObj = new UserModel();
        $data['myusers'] = $userObj->OrderBy('id', 'DESC')->findAll();
        return view('user_display', $data);
        // echo "<pre>";
        // print_r($data);
    }
    public function create()
    {
        return view('user_create');
    }
    public function store()
    {
        helper(['form']);  //ata lagbe na globally autoload a bole dice
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email',

        ];

        if ($this->validate($rules)) {
            $userObj = new UserModel();
            $data['name'] = $this->request->getVar('name');
            $data['email'] = $this->request->getVar('email');
            // echo "<pre>";
            // print_r($data);
            $userObj->insert($data);
            $this->response->redirect('/users');
        } else {
            $data['validation'] = $this->validator;
            return view('user_create', $data);
        }

        // validation sara nicher tuku korlei hbe

        // $userObj = new UserModel();
        // $data['name'] = $this->request->getVar('name');
        // $data['email'] = $this->request->getVar('email');
        // // echo "<pre>";
        // // print_r($data);
        // $userObj->insert($data);
        // $this->response->redirect('/users');
    }

    public function delete($id)
    {
        // echo $id;
        $userObj = new UserModel();
        $userObj->Where('id', $id)->delete($id);
        $this->response->redirect('/users');
    }
    public function edit($id)
    {
        $userObj = new UserModel();
        // $userObj->Where('id', $id)->find($id);
        $data['user'] = $userObj->find($id);
        //print_r($data);
        return view('user_edit', $data);
    }

    public function update()
    {
        $userObj = new UserModel();
        $id =  $this->request->getVar('u_id');  //ai id ta hidden ar $id te store kore rakha holo
        $data['name'] = $this->request->getVar('name');
        $data['email'] = $this->request->getVar('email');
        $userObj->update($id, $data);
        $this->response->redirect('/users');
    }
}
