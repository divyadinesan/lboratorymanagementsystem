
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function registration_model($register)
	{
		return $this->db->insert('admin',$register);
	}
	public function login_model($login)
	{
		$this->db->where($login);
		return $this->db->count_all_results('admin');
	}
////add category to db
	public function category_model($result)
	{
		return $this->db->insert('category',$result);
	}
//end of add category

	public function viewcat_model()
	{
		$this->db->select('*');
		$this->db->from('category');
		return $this->db->get()->result();
	}

	public function lab_insrt_model($lab_insrt)
	{
		return $this->db->insert('lab',$lab_insrt);
	}
	public function editview_model($id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('id',$id);
		return $this->db->get()->result();
	}
	public function update_model($update,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('category',$update);
	}
	public function deletecat_model($id)
	{
		
		$this->db->where('id',$id);
		return $this->db->delete('category');

	}

	public function test_model($add)
	{
		return $this->db->insert('test',$add);
	}


	public function viewproduct_model()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('category','product.cat_id=category.id','inner');
		return $this->db->get()->result();
	}

	public function editproduct_model($id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('pid',$id);
		return $this->db->get()->result();
	}
	public function updateproduct_model($update,$id)
	{
		$this->db->where('pid',$id);
		return $this->db->update('product',$update);
	}
	public function deleteproduct_model($id)
	{
		$this->db->where('pid',$id);
		return $this->db->delete('product');
	}



	public function changepass_model()
	{
		$email=$this->session->userdata('Email');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		return $this->db->get()->result();
	}

	public function editpass_model($result)
	{
		$email=$this->session->userdata('Email');
		$this->db->where('email',$email);
		return $this->db->update('admin',$result);
	}





	public function productcategory_model($id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('cat_id',$id);
		return $this->db->get()->result();
	}
	public function userdetails()
	{
		$this->db->select('*');
		$this->db->from('signup');
		
		return $this->db->get()->result();
	}
public function paymentdetails()
	{
		$this->db->select('*');
		$this->db->join('lab','lab.lab_id=payment.lab_id','inner');
		$this->db->from('payment');
		return $this->db->get()->result();
	}
	public function Admin_registered_lab()
	{
		$this->db->select('*');
		$this->db->from('lab');
		
		$this->db->where('Lab_type','Admin');
		return $this->db->get()->result();
	}
	public function Admin_approved_lab()
	{
		$this->db->select('*');
		$this->db->from('lab');
		$this->db->where('Lab_status','Approve');
		$this->db->where('Lab_type','Lab');
		return $this->db->get()->result();
	}

	public function verify_lab_model()
	{
		$this->db->select('*');
		$this->db->from('lab');
		$this->db->where('Lab_status','Pending');
		$this->db->where('Lab_type','Lab');
		return $this->db->get()->result();
	}
	public function verify_regstr_lab_model($lab_id,$verify)
	{
		$this->db->where('lab_id',$lab_id);
		return $this->db->update('lab',$verify);

	}







} 