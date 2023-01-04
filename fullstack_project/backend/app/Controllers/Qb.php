<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Qb extends BaseController
{
    public function index()
    {


        // $db      = \Config\Database::connect();
        // $builder = $db->table('products');
        // // $builder = $db->table('products')->limit(5, 2);
        // //$builder = $db->table('products')->limit(5, 2);
        // echo "<pre>";
        // $data = $builder->get()->getResult();
        // print_r($data);

        #####################################

        // echo "Specific kora";

        // $db  = \Config\Database::connect();
        // //$builder = $db->table('products');
        // // $builder = $db->table('products')->limit(5, 2);
        // $builder = $db->table('products');
        // echo "<pre>";
        // $raw = $builder->getWhere(['id' => 5]);
        // $data = $raw->getResult();
        // print_r($data);

        ###############################
        // echo "structre bole ana jay";
        // $db  = \Config\Database::connect();
        // $builder = $db->table('products')->select('id,product_name,product_price')->get();

        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);

        ################## Maximum ########

        // $db  = \Config\Database::connect();
        // $builder = $db->table('products')->selectMax('product_price')->get();
        // $data = $builder->getResult();
        // print_r($data);

        ########## Category Based Sum ############

        // $db  = \Config\Database::connect();
        // $builder = $db->table('products')->select('product_category')->selectSum('product_price')->groupBy('product_category')->get();

        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);


        ######### JOIN ############

        // $db  = \Config\Database::connect();
        // $builder = $db->table('products');
        // $builder->join('categories', 'categories.id=products.product_category');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        ########## Where #######
        // $db  = \Config\Database::connect();
        // $builder = $db->table('products, categories');
        // $builder->where('categories.id=products.product_category');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        ############ Where Multiple condition ######

        // $db  = \Config\Database::connect();
        // $builder = $db->table('products');
        // $builder->where('product_price>1000 AND product_category>3');

        // // $builder->where('product_price>1000');
        // // $builder->where('product_category>3');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        ############ Between #########

        // $db  = \Config\Database::connect();
        // $builder = $db->table('products');
        // //$builder->where('product_price>1000 AND product_price<3000 AND product_category>1');

        // $builder->where('product_price between 1000 AND 3000 ');
        // $builder->where('product_category>1');
        // // $builder->where('product_price>1000');
        // // $builder->where('product_price<3000');
        // $builder->where('product_category>1');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        ########### For Accesing Data #########

        // $db = \Config\Database::connect();
        // // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('products');
        // echo "<pre>";
        // $raw = $builder->get();
        // $data['products'] = $raw->getResult();
        // print_r($data);
        // //return view('test', $data);


        ######### With another database #########
        ####### employess table#######
        ####### 1 ######

        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('employees');
        // $builder->select('firstName,lastName,email')->get();
        // $builder->where("jobTitle = 'Sales Rep'");
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        ######## 2 ##########

        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('employees');
        // $builder->select('firstName,lastName,email, jobTitle');
        // $builder->where("jobTitle ='Sales Rep' and reportsTo = 1143");
        // // $builder->where("jobTitle ='Sales Rep' and reportsTo = 1143");
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        #### 3 ########
        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('employees, offices');
        // $builder->select('firstName,lastName,email, city, country');
        // $builder->where('employees.officeCode = offices.officeCode and offices.country = "USA"');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        ##### 4 #####

        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('orders, customers');
        // $builder->select('customerName,phone,city, orderNumber,orderDate,status');
        // $builder->where('orders.customerNumber = customers.customerNumber');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        ##### 4 WITH JOIN #######

        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('orders');
        // $builder->select('customerName,phone,city, orderNumber,orderDate,status');
        // $data = $builder->join('customers', 'orders.customerNumber = customers.customerNumber');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        ##### 5 ####

        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('orders,orderdetails,customers');
        // $builder->select('customerName,phone,city,orders.orderNumber,orderDate,status,quantityOrdered,priceEach');
        // $builder->where('orders.customerNumber = customers.customerNumber AND orders.orderNumber =orderdetails.orderNumber ');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        ######## 5 with join ##### 

        // $db = \Config\Database::connect('quiry_builder');
        // $builder = $db->table('customers');
        // $builder->select('customerName,phone,city,orders.orderNumber,orderDate,status,quantityOrdered,priceEach');
        // $builder->join('orders', 'orders.customerNumber = customers.customerNumber');
        // $builder->join('orderdetails', 'orders.orderNumber =orderdetails.orderNumber');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        #######6 ########

        $db = \Config\Database::connect('quiry_builder');
        $builder = $db->table('orders, orderdetails, customers, products');
        $builder->select('customerName, city, orders.orderNumber, orderDate, products.productCode, productName, quantityOrdered, priceEach, MSRP')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber');

        $builder->where('orders.orderNumber = orderdetails.orderNumber AND
        products.productCode = orderdetails.productCode AND
        orders.customerNumber =  customers.customerNumber');

        $data = $builder->get()->getResult();
        echo "<pre>";
        print_r($data);
    }
}
