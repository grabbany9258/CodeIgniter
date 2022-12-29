<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class Product extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model =  new ProductModel();
        $data['products'] =  $model->findAll();
        //echo print_r($data);
        return view('products/products_list', $data);
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
        return view('products/add_products');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'p_name' => 'required|min_length[5]|max_length[20]',
            'price' => 'required|numeric',
            'category' => 'required',
            'coll_place' => 'required|min_length[5]|max_length[20]',
        ];

        $errors = [
            'p_name' => [
                'required' => "Product name must be put in",
                'min_length' => 'Minimum lenght must be 5',
                'max_length' => 'Maximum lenght must be 20'

            ],
            'price' => [
                'required' => "Product Price must be put in",
                'numeric' => 'Product price must be in Number',
            ],
            'category' => [
                'required' => "Product category must be put in",
                'numeric' => 'Product price must be in Number',
            ],

            'coll_place' => [
                'required' => "Product collection place must be put in",
                'min_length' => 'Minimum lenght must be 5',
                'max_length' => 'Maximum lenght must be 20'
            ],
        ];

        echo $validation = $this->validate($rules, $errors);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model =  new ProductModel();
            $data =  $this->request->getPost();
            //print_r($data);
            if ($model->save($data)) {
                return redirect('Product');
            }
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model =  new ProductModel();
        $data['products'] = $model->find($id);
        //print_r($data);
        return view('products/edit_products', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {

        $validate =   $this->validate([
            'p_name' => 'required|min_length[5]|max_length[20]',
            'price' => 'required|numeric',
            'category' => 'required',
            'coll_place' => 'required|min_length[5]|max_length[20]',
        ]);

        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model =  new ProductModel();
            $data = $this->request->getPost();
            if ($model->update($id, $data)) {

                return redirect('Product');
            }
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model =  new ProductModel();
        $model->delete($id);
        return redirect('Product');
    }
}
