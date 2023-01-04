<?php

namespace App\Controllers;

use App\Database\Migrations\Customer;
use App\Models\CustomerModel;
use App\Models\DepartmentModel;
use CodeIgniter\RESTful\ResourceController;

class Customers extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new CustomerModel();
        $data['customers'] =  $model->findAll();
        $model = new DepartmentModel();
        $data['deps'] = $model->findAll();
        return view('customer/customers_list', $data);
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
        $model = new DepartmentModel();
        $data['deps'] = $model->findAll();
        return view('customer/add_customer', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data['name'] = $this->request->getPost('name');
        $data['dep_category'] = $this->request->getPost('department');
        $data['mob_no'] = $this->request->getPost('mob_no');
        $data['floor_nb'] = $this->request->getPost('floor_nb');
        $model =  new CustomerModel();
        if ($model->save($data)) {
            return redirect('customers');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);
        //print_r($data);
        $model = new DepartmentModel();
        $data['deps'] = $model->findAll();
        return view('customer/edit_customer', $data);
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
        $model = new CustomerModel();
        $model->delete($id);
        return redirect('customers');
    }
}
