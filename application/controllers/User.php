
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
		public function logout()
		 	{
		 		$this->session->sess_destroy();
		 		$this->load->view('Index/index');
		 	}
		 	public function User_register()
		 	{
		 		$this->load->view('user/User_register');
		 	}

	public function index()
	{
		$this->load->view('user/index');
	}
	public function signup()
	{
		$name=$this->input->post('Name');
		$email=$this->input->post('Email');
		$password=$this->input->post('Password');
		
		$phone=$this->input->post('Phone');
		
			$variable=array('name'=>$name,'email'=>$email,'password'=>$password,'phone'=>$phone);
			$this->load->model('User_model');
			$exe=$this->User_model->signup_model($variable);
			if($exe==1)
			{
				echo "<script>alert('signup successfully')</script>";
				$this->index();
			}
			else
			{
				echo "<script>alert('try again')</script>";
				$this->User_register();
			}
		

		
	}
	public function user_check()
	{

		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$variable=array('email'=>$email,'password'=>$password);
		$this->load->model('User_model');
		$count=$this->User_model->signin_model($variable);
		if($count>0)
		{
			echo "<script>alert('signin successfully')</script>";
			$this->session->set_userdata('email',$email);
				$this->home();
		}
		else
		{
			echo "<script>alert('fail to login')</script>";
				$this->index();
		}
	}
	public function home()
	{
		
			if($this->session->has_userdata('email'))
			{
				$this->load->model('User_model');
				$Arrdata['lab']=$this->User_model->lab_fetch_model();
				$this->load->view('user/home',$Arrdata);
			}
			else
			{
				$this->index();
			}

	}



	public function category($lab_id)
	{
		if($this->session->has_userdata('email'))
			{
				$this->load->model('User_model');
				$Arrdata['lab']=$this->User_model->lab_id_fetch_model($lab_id);
				$Arrdata['category']=$this->User_model->category_fetch_model();
				$this->load->view('user/category',$Arrdata);
			}
			else
			{
				$this->index();
			}


		
	}

	public function test($category_id,$lab_id)
	{
		if($this->session->has_userdata('email'))
			{
				$this->load->model('User_model');
				
				$Arrdata['test']=$this->User_model->test_fetch_model($category_id,$lab_id);
				$this->load->view('user/test',$Arrdata);
			}
			else
			{
				$this->index();
			}
	}



	public function single($test_id)
	{

		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
				
			$Arrdata['test']=$this->User_model->test_id_fetch_model($test_id);
			$Arrdata['user']=$this->User_model->profile_model();
			$this->load->view('user/single',$Arrdata);
		}
		else
		{
			$this->index();
		}
		
	}

	public function booking_insrt()
	{
		$lab_Name=$this->input->post('lab_Name');
		$lab_id=$this->input->post('lab_id');

		$test_id=$this->input->post('test_id');
		$lab_email=$this->input->post('lab_email');
		$user_id=$this->input->post('user_id');
		$user_email=$this->input->post('user_email');
		$test_name=$this->input->post('test_name');
		$price=$this->input->post('price');
		$lab_boy_email=$this->input->post('lab_boy_email');
		$time=$this->input->post('time');
		$b_date=$this->input->post('b_date');
		$booking_insrt=array('lab_Name'=>$lab_Name,'lab_id'=>$lab_id,'test_id'=>$test_id,'lab_email'=>$lab_email,'user_id'=>$user_id,'user_email'=>$user_email,'test_name'=>$test_name,'price'=>$price,'lab_boy_email'=>$lab_boy_email,'time'=>$time,'b_date'=>$b_date,'booking_status'=>'Pending','payment_status'=>'Pending','lab_updations'=>'Pending');
		$this->load->model('User_model');
		$execute=$this->User_model->booking_insrt($booking_insrt);
		if($execute)
		{
			echo "<script>alert('Booking!! Waiting For Approvel')</script>";
				$this->mybookings();
		}
		else
		{
			echo "<script>alert('failed')</script>";
				$this->home();
		}

		
	}
	public function mybookings()
	{

		if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
				
			$Arrdata['booking']=$this->User_model->booking_fetch_model();
			$this->load->view('user/mybookings',$Arrdata);
		}
		else
		{
			$this->index();
		}
		
	}

	public function payment($book_id)
	{
		if($this->session->has_userdata('email'))
		{
			 $this->load->model('User_model');
				
			 $Arrdata['booking']=$this->User_model->booking_fetch_id_model($book_id);
			$this->load->view('user/payment',$Arrdata);
		}
		else
		{
			$this->index();
		}
	}
													




public function payment_insert()
{
	if($this->session->has_userdata('email'))
	{
		$book_id=$this->input->post('book_id');
		$lab_id=$this->input->post('lab_id');
		$lab_email=$this->input->post('lab_email');
		$test_id=$this->input->post('test_id');
		$user_email=$this->input->post('user_email');
		$user_id=$this->input->post('user_id');
		$carh_holder_name=$this->input->post('carh_holder_name');
		$card_number=$this->input->post('card_number');
		$cvv=$this->input->post('cvv');
		$expiry_date=$this->input->post('expiry_date');
		$amount=$this->input->post('amount');
		$Arrdata=array('book_id'=>$book_id,'lab_id'=>$lab_id,'lab_email'=>$lab_email,'test_id'=>$test_id,'user_email'=>$user_email,'user_id'=>$user_id,'carh_holder_name'=>$carh_holder_name,'card_number'=>$card_number,'cvv'=>$cvv,'expiry_date'=>$expiry_date,'amount'=>$amount);
		$this->load->model('User_model');
		$exe=$this->User_model->paymentinsert_model($Arrdata);
		if($exe==1)
		{
			$Arrdata_updation=array('payment_status'=>'Payed');
			$this->load->model('User_model');
				$execute=$this->User_model->paymentupdation_model($book_id,$Arrdata_updation);
				if($execute)
				{
			echo "<script>alert('payment successfully Completed.')</script>";
			$this->mybookings();
				}
				else
				{
					echo "<script>alert('Fail')</script>";
			$this->mybookings();
				}

		}
		else
		{
			echo "<script>alert('Fail')</script>";
			$this->mybookings();
		}
	}
}

public function test_results()
{
	if($this->session->has_userdata('email'))
		{
			$this->load->model('User_model');
			 $Arrdata['test_result']=$this->User_model->test_results_fetch_model();
			$this->load->view('user/test_results',$Arrdata);
		}
		else
		{
			$this->index();
		}
}
// public function receipt()
// {
// 	if($this->session->has_userdata('email'))
// 	{
// 		$this->load->model('User_model');
// 		$result['payaddress']=$this->User_model->receipt_model();
// 		$result['cart']=$this->User_model->cart_table();
// 		$this->load->view('user/receipt',$result);
// 	}
// 	else
// 	{
// 		$this->index();
// 	}
// }
// public function clearcart()
// {
// 	$this->load->model('User_model');
// 	$result=$this->User_model->cartdelete();
// 	if($result==1)
// 	{
// 		$this->home();
// 	}
// 	else
// 	{
// 		$this->receipt();
// 	}
// }
// public function profile()
// {
// 	if($this->session->has_userdata('email'))
// 	{
// 	$this->load->model('User_model');
// 	$result['profile']=$this->User_model->profile_model();
// 	$this->load->view('user/profile',$result);
// 	}
// 	else
// 	{
// 		$this->index();
// 	}
// }
public function profile()
{
	if($this->session->has_userdata('email'))
	{
		$this->load->model('User_model');
		$result['profile']=$this->User_model->profile_model();
		$this->load->view('user/profile',$result);
	}
	else
	{
		$this->index();
	}
}
public function profileedit()
{
	$name=$this->input->post('name');
	$phone=$this->input->post('phone');
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$variable=array('name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password);
	$this->load->model('User_model');
	$result=$this->User_model->profiledeit($variable);
	if($result==1)
	{
		echo "<script>alert('profile edited successfully')</script>";
		$this->profile();
	}
	else
	{
		echo "<script>alert('fail')</script>";
		$this->profile();
	}
}
public function signout()
{
	$this->session->sess_destroy();
	$this->index();
}
























}