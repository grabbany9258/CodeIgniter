<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\FoodModel;
use App\Models\OrdersModel;
use CodeIgniter\RESTful\ResourceController;

class Orders extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new OrdersModel();
        $data['orders'] = $model->findAll();
        return view('/orders/orders_list', $data);
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
        // For showing Customers list
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();

        // for showing foof list
        $model = new FoodModel();
        $data['product'] = $model->findAll();

        return view('orders/add_orders', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
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
        //
    }
}
