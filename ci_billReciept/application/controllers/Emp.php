<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('EmpModel');
	}
	function index(){
		
		$result['data']=$this->EmpModel->loadVeigtable();
		$this->load->view('listEmp',$result);
	}
	

	function priceGet()
	{
		
		$id = $this->input->post('id');
		$data=$this->EmpModel->vegitablePrice($id);
		echo json_encode($data);
		
	}
	
	
}