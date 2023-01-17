<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\FoodModel;
use CodeIgniter\RESTful\ResourceController;

class Food extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new FoodModel();
        $data['food'] = $model->findAll();

        $model = new CategoryModel();
        $data['categories'] = $model->findAll();

        return view('food/food_list', $data);
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
        $model = new CategoryModel();
        $data['cats'] = $model->orderBy('categories_name', 'ASC')->findAll();
        return view("food/add_food", $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data['product_name'] =  $this->request->getPost('product_name');
        $data['quantity'] =  $this->request->getPost('quantity');
        $data['rate'] =  $this->request->getPost('rate');
        $data['categories_id'] =  $this->request->getPost('category_name');
        $data['status'] =  $this->request->getPost('productStatus');




        $model = new FoodModel();



        if ($model->save($data)) {

            return redirect()->to('food')->with('msg', "Succesfully added");
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new FoodModel();
        $model->delete($id);
        return redirect()->to('food')->with('msg', "Deleted Succesfully");
    }
}
