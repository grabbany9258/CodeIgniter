<?php

namespace App\Controllers;

use App\Database\Seeds\CategorySeeder;
use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;

class Category extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();
        return view('category/category_list', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        // $model = new CategoryModel();
        return view('category/add_category');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {

        //print_r($data);

        $model = new CategoryModel();
        if ($model->save($data)) {
            //return redirect('Products');
            return redirect()->to('category');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data['category_name'] = $this->request->getPost('category_name');
        $data['category_details'] = $this->request->getPost('category_details');
        $model = new CategoryModel();
        $data['cat'] =  $model->find($id);
        return view('category/edit_category', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new CategoryModel();
        $data['category_name'] = $this->request->getPost('category_name');
        $data['category_details'] = $this->request->getPost('category_details');
        $model->update($id, $data);
        return redirect()->to('category');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new CategoryModel();
        $model->delete($id);
        return redirect()->to('category')->with('del_msg', "Deleted Succesfully");
    }
}
