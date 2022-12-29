<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        // print_r($data);
        return view('products/product_list', $data);
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
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
        ];

        $errors = [
            'product_name' => [
                'required' => 'Product Name must be fill',
                'min_length' => 'Minimum length 5',
                'max_length' => 'Maximum lenght is 30',
            ],
            'product_details' => [
                'required' => 'Product Details must be fill',
                'min_length' => 'Minimum length 10',

            ],
            'product_price' => [
                'required' => 'Product Price must be fill',
                'numeric' => 'Number Only',

            ],


        ];

        echo $validation = $this->validate($rules, $errors);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model = new ProductModel();
            $data =  $this->request->getPost();
            //print_r($data);
            if ($model->save($data)) {
                //return redirect('Products');
                return redirect()->to('Products');
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
        $model = new ProductModel();
        $data['product'] = $model->find($id);
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

        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',

        ]);

        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model = new ProductModel();
            $data['product_name'] = $this->request->getPost('product_name');
            $data['product_details'] = $this->request->getPost('product_details');
            $data['product_price'] = $this->request->getPost('product_price');
            $model->update($id, $data);
            return redirect()->to('Products')->with('msg', "Updated Succesfully");
        }

        // Avbebeo kora jay

        // $model = new ProductModel();
        // $data = $this->request->getPost();
        // if ($model->update($id, $data)) {
        //     return redirect('Products');
        // }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('Products')->with('del_msg', "Deleted Succesfully");
    }
}
