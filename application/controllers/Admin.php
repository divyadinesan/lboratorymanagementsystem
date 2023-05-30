<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	// public function index()
	// {
	// 	$this->load->view('admin/index');
	// }
	

	public function login()
	{
		$this->load->view('admin/login');
	}
	public function log()
 	{
		$mail=$this->input->post('Email');
		$password=$this->input->post('Password');
		$login=array('email'=>$mail,'password'=>$password);
		$this->load->model('Admin_model');
		$count=$this->Admin_model->login_model($login);
		if($count>0)
		{
			echo "<script>alert('login sussessfully')</script>";
			$this->session->set_userdata('Email',$mail);
			$this->changepass();
		}
		else
		{
			echo "<script>alert('login fail')</script>";
			$this->login();
		}
	}
	public function lab_add()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->view('admin/lab_add');
		}
		else
		{
			$this->login();
		}
		
	}

	public function lab_insert()
	{
		$lab_name=$this->input->post('name');
		$lab_email=$this->input->post('email');
		$lab_phone=$this->input->post('phone');
		$lab_experience=$this->input->post('experience');
		$lab_boy=$this->input->post('lab_boy');
		$lab_boy_email=$this->input->post('lab_boy_email');
		$lab_boy_pass=$this->input->post('lab_boy_pass');
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
					 $lab_insrt=array('lab_name'=>$lab_name,'lab_email'=>$lab_email,'lab_phone'=>$lab_phone,'lab_experience'=>$lab_experience,'lab_boy'=>$lab_boy,'lab_boy_email'=>$lab_boy_email,'lab_boy_pass'=>$lab_boy_pass,'image'=>$photo,'experience_certificate'=>$photo1,'Lab_status'=>'Approve','Lab_type'=>'Admin');
					$this->load->model('Admin_model');
					 $exe1=$this->Admin_model->lab_insrt_model($lab_insrt);
			
					if($exe1==1)
					{
						echo "<script>alert('Added!!!')</script>";
						$this->lab_add();
					}
					else
					{
		
						echo "<script>alert('failed')</script>";
						$this->lab_add();
					}
					}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->lab_add();		

				}
				}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->lab_add();
				}
			}
	


public function Manage_lab()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$result['Admin']=$this->Admin_model->Admin_registered_lab();
			$result['lab']=$this->Admin_model->Admin_approved_lab();
			$this->load->view('admin/Manage_lab',$result);
		}
		else
		{
			$this->login();
		}
		
	}

	public function category()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->view('admin/category_add');
		}
		else
		{
			$this->login();
		}
	}



	public function category_add()
	{
		$category=$this->input->post('category');
		$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Assets/admin/category/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if( $this->upload->do_upload('image'))
			{
				$result=array('category'=>$category,'image'=>$photo);
		$this->load->model('Admin_model');
		$rec=$this->Admin_model->category_model($result);
		if($rec==1)
		{
			echo "<script>alert('added successfully')</script>";

			$this->category();
		}
		else

		{
			echo "<script>alert('failed')</script>";
			$this->category();
		}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->category();
			}


		
	}




	public function cat_view()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$result['cat']=$this->Admin_model->viewcat_model();
			$this->load->view('admin/category_view',$result);
		}
		else
		{
			$this->login();
		}
	}
	public function editcat($id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$result['category']=$this->Admin_model->editview_model($id);
			$this->load->view('admin/category_edit',$result);
		}
		else
		{
			$this->login();
		}
	}


	public function updatecat()
	{
		$id=$this->input->post('id');
		$category=$this->input->post('category');
		$update=array('category'=>$category);
		$this->load->model('Admin_model');
		$result=$this->Admin_model->update_model($update,$id);
		if($result==1)
		{
			echo "<script>alert('update successfully')</script>";
			$this->cat_view();
		}
		else
		{
			echo "<script>alert('update fail')</script>";
			$this->cat_view();
		}


	} 

	public function delcat($id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$result=$this->Admin_model->deletecat_model($id);
			if($result==1)
			{
				echo "<script>alert('delete successfully')</script>";
				$this->cat_view();
			}
			else
			{
				echo "<script>alert('TRY AGAIN')</script>";
				$this->cat_view();
			}

		}
		else
		{
			$this->login();
		}
	}


	public function product()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Admin_model');
			$result['cat']=$this->Admin_model->viewcat_model();
			$this->load->view('admin/product_add',$result);
		}
		else
		{
			$this->login();
		}
	}

	

		// public function view_product()
		// {
		// 	if($this->session-> has_userdata('Email'))
		// 	{
		// 		$this->load->model('Admin_model');
		// 		$result['pro'] =$this->Admin_model->viewproduct_model();
		// 		$this->load->view('admin/product_view',$result);
		// 	}
		// 	else
		// 	{
		// 		$this->login();
		// 	}
		// }

		 public function editpro($id)
		 {
		 	if($this->session->has_userdata('Email'))
		 	{
		 		$this->load->model('Admin_model');
		 		$result['cat']=$this->Admin_model->viewcat_model();
		 		$result['product']=$this->Admin_model->editproduct_model($id);
		 		$this->load->view('admin/product_edit',$result);
		 	}
		 	else
		 	{
		 		$this->login();
		 	}
		 }

		 	public function update_product()
		 	{
		 		$cid=$this->input->post('cid');
		 		$id=$this->input->post('id');
		 		$name=$this->input->post('name');
		 		$price=$this->input->post('price');
		 		$description=$this->input->post('description');
		 		// $image=$_FILES['image']['name'];
		 		// if($image!="")
		 		// {
		 		// 	$time = Time();
					// $images = explode('.',$image);
					// $photo =$time.'.'.end($images);
					// $config['upload_path']= './Assets/admin/product/';
					// $config['allowed_types']= 'jpg|png|jpeg';
					// $config['file_name'] = $photo;
					// $this->load->library('upload', $config);
					// $this->upload->initialize($config);
					// if( $this->upload->do_upload('image'))
					// {
							$update=array('cat_id'=>$cid,'p_name'=>$name,'price'=>$price,'description'=>$description);
				 		$this->load->model('Admin_model');
				 		$result=$this->Admin_model->updateproduct_model($update,$id);
				 		if($result==1)
				 		{
				 			echo "<script>alert('updated successfully')</script>";
				 			$this->view_product();
				 		}
				 		else
				 		{
				 			echo "<script>alert('Try Again')</script>";
				 			$this->view_product();
				 		}
					// }
					// else
					// {
					// 	echo "<script>alert('invalid image')</script>";
				 // 		$this->view_product();
					// }
		 		}
		 		// else
		 		// {
		 		// 	$update=array('cat_id'=>$cid,'p_name'=>$name,'price'=>$price,'description'=>$description);
				 // 		$this->load->model('Admin_model');
				 // 		$result=$this->Admin_model->updateproduct_model($update,$id);
				 // 		if($result==1)
				 // 		{
				 // 			echo "<script>alert('updated successfully')</script>";
				 // 			$this->view_product();
				 // 		}
				 // 		else
				 // 		{
				 // 			echo "<script>alert('Try Again')</script>";
				 // 			$this->view_product();
				 // 		}
		 		// }
				
		 		

		 	// }
		 	public function delpro($id)
		 	{
		 		if($this->session->has_userdata('Email'))
		 		{
		 			$this->load->model('Admin_model');
		 			$result=$this->Admin_model->deleteproduct_model($id);
		 			if($result==1)
		 			{
		 				echo "<script>alert('deleted successfully')</script>";
		 				$this->view_product();
		 			}
		 			else
		 			{
		 				echo "<script>alert('try again')</script>";
		 				$this->view_product();
		 			}
		 		}
		 		else
		 		{
		 			$this->login();
		 		}
		 	}
		 	public function changepass()
		 	{
		 		if($this->session->has_userdata('Email'))
		 		{
		 			$this->load->model('Admin_model');
		 			$result['pass']=$this->Admin_model->changepass_model();

		 			$this->load->view('admin/changepass',$result);
		 			

		 		}
		 		else
		 		{
		 			$this->login();
		 		}
		 	}
		 	public function editpass ()
		 	{
		 		
		 		$changepass=$this->input->post('changepass');
		 		$result=array('password'=>$changepass);
		 		$this->load->model('Admin_model');
		 		$res=$this->Admin_model->editpass_model($result);
		 		if($res==1)
		 		{
		 			echo "<script>alert('update successsfully')</script>";
		 			$this->login();
		 		}
		 		else
		 		{
		 			echo "<script>alert('Try again')</script>";
		 			$this->changepass();
		 		}
		 	}

		 	public function logout()
		 	{
		 		$this->session->sess_destroy();
		 		$this->load->view('Index/index');
		 	}

		 	 public function userdetails()
		 	 {
		 	 	if($this->session->has_userdata('Email'))
		 	 	{
		 	 	$this->load->model('Admin_model');
		 	 	$result['detail']=$this->Admin_model->userdetails();
		 	 	$this->load->view('Admin/userdetails',$result);
		 	 	}
		 	 	else
		 	 	{
		 	 		$this->login();
		 	 	}

		 	 }
		 	
		 	 public function paymentdetails()
		 	 {
		 	 	if($this->session->has_userdata('Email'))
		 	 	{
		 	 	$this->load->model('Admin_model');
		 	 	$result['payment']=$this->Admin_model->paymentdetails();
		 	 	$this->load->view('Admin/payment',$result);
		 	 	}
		 	 	else
		 	 	{
		 	 		$this->login();
		 	 	}
		 	 }


		 	 public function verify_lab()
		 	 {
		 	 	if($this->session->has_userdata('Email'))
		 	 	{
		 	 	$this->load->model('Admin_model');
		 	 	$arraydata['verify_lab']=$this->Admin_model->verify_lab_model();
		 	 	$this->load->view('Admin/verify_lab',$arraydata);
		 	 	}
		 	 	else
		 	 	{
		 	 		$this->login();
		 	 	}
		 	 }
		 	 public function approve($lab_id)
		 	 {
		 	 	$verify=array('Lab_status'=>'Approve');
		 	 	$this->load->model('Admin_model');
		 	 	$execute=$this->Admin_model->verify_regstr_lab_model($lab_id,$verify);
		 	 	if($execute==1)
		 		{
		 			echo "<script>alert('Approved')</script>";
		 			$this->verify_lab();
		 		}
		 		else
		 		{
		 			echo "<script>alert('Try again')</script>";
		 			$this->verify_lab();
		 		}
		 	 }
		 	 public function reject($lab_id)
		 	 {
				$verify=array('Lab_status'=>'Reject');
		 	 	$this->load->model('Admin_model');
		 	 	$execute=$this->Admin_model->verify_regstr_lab_model($lab_id,$verify);
		 	 	if($execute==1)
		 		{
		 			echo "<script>alert('Rejected')</script>";
		 			$this->verify_lab();
		 		}
		 		else
		 		{
		 			echo "<script>alert('Try again')</script>";
		 			$this->verify_labs();
		 		}
		 	 }


}
