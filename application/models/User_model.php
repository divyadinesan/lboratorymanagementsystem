<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function signup_model($variable)
	{
		return $this->db->insert('signup',$variable);
	}
	public function signin_model($variable)
	{
		$this->db->where($variable);
		return $this->db->count_all_results('signup');
	}


	public function lab_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('lab');
		$this->db->where('Lab_status','Approve');
		return $this->db->get()->result();
	}

	public function category_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('category');
		return $this->db->get()->result();
	}
	public function lab_id_fetch_model($lab_id)
	{
		$this->db->select('*');
		$this->db->from('lab');
		$this->db->where('lab_id',$lab_id);
		return $this->db->get()->result();
	}
	public function test_fetch_model($category_id,$lab_id)
	{
		$this->db->select('*');
		$this->db->from('test');
		$this->db->where('test.cat_id',$category_id);
		
		$this->db->where('lab_id',$lab_id);
		
		return $this->db->get()->result();
	}
	public function test_id_fetch_model($test_id)
	{
		$this->db->select('*');
		$this->db->from('test');
		$this->db->where('test_id',$test_id);
		$this->db->join('lab','lab.lab_id=test.lab_id');
		return $this->db->get()->result();
	}

	public function booking_insrt($booking_insrt)
	{
		return $this->db->insert('booking',$booking_insrt);
	}
	public function booking_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('booking');
	$this->db->join('lab','lab.lab_id=booking.lab_id');
	$this->db->where('booking.user_email',$email);
	$this->db->join('signup','signup.id=booking.user_id');
		return $this->db->get()->result();
	}

	public function booking_fetch_id_model($book_id)
	{

		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('book_id',$book_id);
		return $this->db->get()->result();
	}
	public function paymentinsert_model($Arrdata)
	{
		return $this->db->insert('payment',$Arrdata);
	}
	public function paymentupdation_model($book_id,$Arrdata_updation)
	{
		$this->db->where('book_id',$book_id);
		return $this->db->update('booking',$Arrdata_updation);

	}

















	public function profile_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('signup');
		$this->db->where('email',$email);
		return $this->db->get()->result();
	}

	public function test_results_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('test_result');
		$this->db->where('user_email',$email);
		return $this->db->get()->result();
	}




	// public function cart_model($variable)
	// {
	// 	 return $this->db->insert('cart',$variable);
	// }

	// public function total_model($subt)
	// {
	// 	 return $this->db->insert('total',$subt);
	// }




	// public function cart_table()
	// {
	// 	$email=$this->session->userdata('email');
	// 	$this->db->select('*');
	// 	$this->db->from('cart');
	// 	$this->db->join('product','cart.productid=product.pid','inner');
	// 	return $this->db->get()->result();
	// }

	
	// public function remove($id)
	// {
	// 	$this->db->where('cart_id',$id);
	// 	return $this->db->delete('cart');
	// }
	// public function newaddress($variable)
	// {
	// 	return $this->db->insert('newaddress',$variable);
	// }


	// public function paymentinsert($variable)
	// {
	// 	return $this->db->insert('payment',$variable);
	// }

	// public function receipt_model()
	// {
	// 	/*$email=$this->session->userdata('email');*/
	// 	$this->db->select('*');
	// 	$this->db->from('newaddress');
	// 	/*$this->db->join('payment','newaddress.uid=payment.userid','inner');*/
	// 	/*$this->db->where('payment.email',$email);*/
	// 	$this->db->order_by('o_id','desc');
	// 	$this->db->limit(1);
	// 	return $this->db->get()->result();
	// }
	// public function cartdelete()
	// {
	// 	$email=$this->session->userdata('email');
	// 	$this->db->where('usermail',$email);
	// 	return $this->db->delete('cart');
	// }

	public function profiledeit($variable)
	{

		$email=$this->session->userdata('email');
		$this->db->where('email',$email);
		return $this->db->update('signup',$variable);
	}

	/*public function subtotal_model()
	{
		$this->db->insert_id();
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('newaddress');
		$this->db->where('payment.email',$email);
		$this->db->order_by('id','desc');
		
		return $this->db->get()->result();
	}*/























































}