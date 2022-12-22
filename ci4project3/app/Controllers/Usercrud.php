<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CrudModel;

class Usercrud extends BaseController
{
    public function index()
    {
        $myCrud = new CrudModel();
        $data['users'] = $myCrud->findAll();
        //echo "<pre>";
        //echo print_r($data);
        $data['title'] = "Crud System";
        return view('crudSystem/User_display', $data);
    }

    public function create()
    {
        $data['title'] = "Adding New User";
        return view('crudSystem/Add_user', $data);
    }
    public function store()
    {
        // helper(['form']);
        $newuser =  new CrudModel();
        // $data['u_name'] = $this->request->getVar('u_name');
        // $data['email'] = $this->request->getVar('email');
        // $data['phone'] = $this->request->getVar('phone');

        // uporer purota avabeo kora jay
        $data = $this->request->getPost();
        //print_r($data);

        $newuser->insert($data);
        $this->response->redirect('/users');
    }
    public function delete()
    {
    }
}
