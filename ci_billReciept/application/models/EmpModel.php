<?php
class EmpModel extends CI_Model
{
	function loadVeigtable()
	{
		$hasil=$this->db->get('orders');
		return $hasil->result_array();
	}

	function vegitablePrice($price_id)
	{
		$query = $this->db->select('product_price')
						->from('orders')
						->where('id', $price_id)
						->get();
		return $query->row_array();
	}
	
	
}