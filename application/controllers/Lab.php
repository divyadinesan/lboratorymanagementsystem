<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller 
{


	public function Logout()
	{
		$this->session->sess_destroy();
		 		$this->load->view('Index/index');
	}
     
     public function lab_register()
	{
		$this->load->view('Labouratory/lab_register');
	}
	public function lab_reg_insert()
	{
		
		$lab_name=$this->input->post('name');
		$lab_email=$this->input->post('email');
		$lab_phone=$this->input->post('phone');
		$lab_experience=$this->input->post('experience');
		$lab_boy=$this->input->post('lab_boy');
		$lab_boy_email=$this->input->post('lab_boy_email');
		$lab_boy_pass=$this->input->post('lab_boy_pass');
		$image=$_FILES['images']['name'];
			 	$time = Time();
			 	$images = explode('.',$image);
				$photo =$time.'.'.end($images);
			 	$config['upload_path']= './Assets/admin/lab';
			 	$config['allowed_types']= 'jpg|png|jpeg';
			 	$config['file_name'] = $photo;
				$this->load->library('upload', $config);
			 	$this->upload->initialize($config);

			 	if( $this->upload->do_upload('images'))
				{



					$image1=$_FILES['experience_certificate']['name'];
			 	$time1 = Time();
			 	$images1 = explode('.',$image1);
				$photo1 =$time1.'.'.end($images1);
			 	$config1['upload_path']= './Assets/admin/experience_certificate';
			 	$config1['allowed_types']= 'jpg|png|jpeg|pdf';
			 	$config1['file_name'] = $photo1;
				$this->load->library('upload', $config1);
			 	$this->upload->initialize($config1);

			 	if( $this->upload->do_upload('experience_certificate'))
				{
					 $lab_insrt=array('lab_name'=>$lab_name,'lab_email'=>$lab_email,'lab_phone'=>$lab_phone,'lab_experience'=>$lab_experience,'lab_boy'=>$lab_boy,'lab_boy_email'=>$lab_boy_email,'lab_boy_pass'=>$lab_boy_pass,'image'=>$photo,'experience_certificate'=>$photo1,'Lab_status'=>'Pending','Lab_type'=>'Lab');
					$this->load->model('Admin_model');
					 $exe1=$this->Admin_model->lab_insrt_model($lab_insrt);
			
					if($exe1==1)
					{
						echo "<script>alert('Waiting For Approval!!!')</script>";
						$this->lab_login();
					}
					else
					{
		
						echo "<script>alert('failed')</script>";
						$this->lab_register();
					}
					}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->lab_register();		

				}
				}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->lab_register();
				}
	}

	public function lab_login()
	{
		$this->load->view('Labouratory/Lab_login');
	}
	public function lab_check()
	{
		$mail=$this->input->post('email');
		$name=$this->input->post('password');
		$login=array('lab_name'=>$name,'lab_email'=>$mail,'Lab_status'=>'Approve');
		$this->load->model('Lab_model');
		$count=$this->Lab_model->lab_login_model($login);
		if($count>0)
		{
			echo "<script>alert('login sussessfully')</script>";
			$this->session->set_userdata('Email',$mail);
			$this->lab_profile();
		}
		else
		{
			echo "<script>alert('login fail')</script>";
			$this->lab_login();
		}
	}
	public function lab_profile()
	{
		if($this->session->has_userdata('Email'))
		{
			 $this->load->model('lab_model');
			 $result['lab']=$this->lab_model->lab_fetch_model();
			$this->load->view('Labouratory/lab_profile',$result);
		}
		else
		{
			$this->login();
		}
	}
	public function test_add()
	{
		
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			 $this->load->model('lab_model');
			 $result['lab']=$this->lab_model->lab_fetch_model();
			$result['cat']=$this->Admin_model->viewcat_model();
			$result['test']=$this->lab_model->test_fetch_model();
			$this->load->view('Labouratory/test_add',$result);
		}
		else
		{
			$this->login();
		}
	}


	public function test_insert()
	{
		$lab_id=$this->input->post('lab_id');
			$catid=$this->input->post('cid');
		$lab_email=$this->session->userdata('Email');
			$catid=$this->input->post('cid');
			$name=$this->input->post('name');
			$price=$this->input->post('price');
			$description=$this->input->post('description');

			 $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Assets/admin/lab';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			 {
				$add=array('cat_id'=>$catid,'test_name'=>$name,'test_price'=>$price,'test_description'=>$description,'test_image'=>$photo,'lab_email'=>$lab_email,'lab_id'=>$lab_id);
				$this->load->model('Admin_model');
				$exe=$this->Admin_model->test_model($add);
				if($exe==1)
				{
					echo "<script>alert('Added successfully')</script>";
					$this->test_add();
				}
				else
				{
					echo "<script>alert('try again')</script>";
					$this->test_add();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->test_add();
			}
	}

	public function user_request()
	{
		
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Lab_model');
				
			$Arrdata['booking']=$this->Lab_model->booking_fetch_model();
			$this->load->view('Labouratory/user_request',$Arrdata);
		}
		else
		{
			$this->login();
		}
	}

	public function approve_booking($book_id)
	{
			$booking=array('booking_status'=>'Approved');
			$this->load->model('Lab_model');
		$execute=$this->Lab_model->manage_booking_model($book_id,$booking);;
		if($execute==1)
		{
			echo "<script>alert('Booking Approved! sussessfully')</script>";
			
			$this->user_request();
		}
		else
		{
			echo "<script>alert('Failed To Approved')</script>";
			$this->user_request();
		}
	}

	public function reject_booking($book_id)
	{
			$booking=array('booking_status'=>'Rejected');
			$this->load->model('Lab_model');
		$execute=$this->Lab_model->manage_booking_model($book_id,$booking);
		if($execute==1)
		{
			echo "<script>alert('Rejected')</script>";
			
			$this->user_request();
		}
		else
		{
			echo "<script>alert('Failed To Reject')</script>";
			$this->user_request();
		}
	}

	public function test_result()
	{
		$book_id=$this->input->post('book_id');
			$lab_Name=$this->input->post('lab_Name');
		$lab_id=$this->input->post('lab_id');
			$test_id=$this->input->post('test_id');
			$lab_email=$this->input->post('lab_email');
			$user_id=$this->input->post('user_id');
			$user_email=$this->input->post('user_email');
			$test_name=$this->input->post('test_name');

			 $image=$_FILES['report']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Assets/Labouratory/test_report';
			 $config['allowed_types']= 'jpg|png|jpeg|pdf';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('report'))
			 {
				$Arrdata=array('book_id'=>$book_id,'lab_Name'=>$lab_Name,'lab_id'=>$lab_id,'test_id'=>$test_id,'lab_email'=>$lab_email,'user_id'=>$user_id,'user_email'=>$user_email,'test_name'=>$test_name,'report'=>$photo);
				$this->load->model('Lab_model');
				$exe=$this->Lab_model->test_result_model($Arrdata);
				if($exe==1)
				{
					echo "<script>alert('Added successfully')</script>";
					$this->user_request();
				}
				else
				{
					echo "<script>alert('try again')</script>";
					$this->user_request();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->user_request();
			}
	}

	public function payment_details()
	{
		
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Lab_model');
				
			$Arrdata['payment']=$this->Lab_model->payment_fetch_model();
			$this->load->view('Labouratory/payment_details',$Arrdata);
		}
		else
		{
			$this->login();
		}
	}

}
