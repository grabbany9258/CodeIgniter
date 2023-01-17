<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use CodeIgniter\API\ResponseTrait;

class FrontendCat extends BaseController
{
    use ResponseTrait;
    public function CustomerList()
    {
        $model = new CustomerModel();
        $customer = $model->orderBy('name', 'ASC')->findAll();
        return $this->respond($customer);
    }
}
