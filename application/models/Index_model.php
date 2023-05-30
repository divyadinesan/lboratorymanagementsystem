
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model
{

public function lab_boy_login_model($login)

{
	$this->db->where($login);
		return $this->db->count_all_results('lab');
}

public function lab_boy_booking_fetch_model()
{

	$lab_boyemail=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('booking');
	$this->db->join('lab','lab.lab_id=booking.lab_id');
	$this->db->join('signup','signup.id=booking.user_id');
	$this->db->where('booking.lab_boy_email',$lab_boyemail);
	// $this->db->where('booking.lab_updations','Pending' );
	// $this->db->where('booking.lab_updations','Sample Reached the Lab');
	return $this->db->get()->result();
}

public function lab_updation_model($lab_updation_array,$book_id)
{
	$this->db->where('book_id',$book_id);
	return $this->db->update('booking',$lab_updation_array);

}


}