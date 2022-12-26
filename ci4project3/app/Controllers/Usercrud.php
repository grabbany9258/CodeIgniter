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
        $model =  new CrudModel();
        // $data['u_name'] = $this->request->getVar('u_name');
        // $data['email'] = $this->request->getVar('email');
        // $data['phone'] = $this->request->getVar('phone');

        // uporer purota avabeo kora jay
        $data = $this->request->getPost();
        //print_r($data);

        $model->insert($data);
        $this->response->redirect('/users');
    }
    public function delete($id = null)
    {
        //echo $id;
        $model =  new CrudModel();
        $model->delete($id);
        //return redirect()->to("users");
        // $this->response->redirect('/users');
        $this->response->redirect('/users');
    }
    public function edit($id)
    {
        //echo $id;
        $model =  new CrudModel();
        $data['title'] = "Edit Users";
        $data['user'] =  $model->find($id);
        return view('crudSystem/edit_user', $data);
    }
    public function update($id = null)
    {
        //echo $id;
        $model = new CrudModel();
        $data = $this->request->getPost();
        //echo print_r($data);
        if ($model->update($id, $data)) {
            //return redirect('users');
            $this->response->redirect('/users');
        }
    }
}
