<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller 
{

	public function indexindex()
	{
		$this->load->view('Index/index');
	}
	public function about()
	{
		$this->load->view('Index/about');
	}
	public function contact()
	{
		$this->load->view('Index/contact');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('Index/index');
	}
	public function lab_boy_login()

	{
		$this->load->view('Index/lab_boy_login');
	}
	public function lab_boy_login_check()
	{
		$mail=$this->input->post('email');
		$password=$this->input->post('password');
		$login=array('lab_boy_email'=>$mail,'lab_boy_pass'=>$password);
		$this->load->model('Index_model');
		$count=$this->Index_model->lab_boy_login_model($login);
		if($count>0)
		{
			echo "<script>alert('login sussessfully')</script>";
			$this->session->set_userdata('Email',$mail);
			$this->lab_boy_home();
		}
		else
		{
			echo "<script>alert('login fail')</script>";
			$this->lab_boy_login();
		}
	}

	public function lab_boy_home()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Index_model');
			$Arrdata['booking']=$this->Index_model->lab_boy_booking_fetch_model();
			$this->load->view('Index/lab_boy_home',$Arrdata);
		}
		else
		{
			$this->login();
		}
	}

	public function sample_updation($book_id)
	{
		$lab_updation=$this->input->post('lab_updation');
		$lab_updation_array=array('lab_updations'=>$lab_updation);
		$this->load->model('Index_model');
		$count=$this->Index_model->lab_updation_model($lab_updation_array,$book_id);
		if($count>0)
		{
			echo "<script>alert('updated sussessfully')</script>";
			
			$this->lab_boy_home();
		}
		else
		{
			echo "<script>alert('failed to update')</script>";
			$this->lab_boy_home();
		}

	}











}