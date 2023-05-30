<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_model extends CI_Model
{

public function lab_login_model($login)
{
	$this->db->where($login);
		return $this->db->count_all_results('lab');
}

public function lab_fetch_model()
{
	$lab_email=$this->session->userdata('Email');
	$this->db->select('*');
		$this->db->from('lab');

		$this->db->where('lab_email',$lab_email);
		
		return $this->db->get()->result();
}
public function test_fetch_model()
{
	$lab_email=$this->session->userdata('Email');
	$this->db->select('*');
		$this->db->from('test');
$this->db->join('category','test.cat_id=category.id');
		$this->db->where('lab_email',$lab_email);
		
		return $this->db->get()->result();
}



public function booking_fetch_model()
{
	$lab_email=$this->session->userdata('Email');
	$this->db->select('*');
		$this->db->from('booking');
	$this->db->join('lab','lab.lab_id=booking.lab_id');
	$this->db->join('signup','signup.id=booking.user_id');
	$this->db->where('booking.lab_email',$lab_email);
	//$this->db->where('booking.booking_status','Pending');
		return $this->db->get()->result();
}

public function manage_booking_model($book_id,$booking)
{
	$this->db->where('book_id',$book_id);
	return $this->db->update('booking',$booking);
}

public function test_result_model($Arrdata)
{
	return $this->db->insert('test_result',$Arrdata);
}
public function payment_fetch_model()
{
	$lab_email=$this->session->userdata('Email');
	$this->db->select('*');
		$this->db->from('payment');
		$this->db->join('booking','booking.book_id=payment.book_id');
		$this->db->where('payment.lab_email',$lab_email);
		
		return $this->db->get()->result();
}





}
