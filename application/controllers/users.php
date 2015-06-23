<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	
	}

    // main page

	public function index()
	{	
	   $this->load->view('index');
	}

	
	//adding new user

	public function create()
	{	
		//validate forms
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('password2', 'password2', 'trim|required');

		if($this->form_validation->run()=== FALSE)
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata('messages', $this->view_data['errors']);
			$this->load->view('register');

		}

		// check passwords match 

		else if($this->input->post('password') !== $this->input->post('password2'))

		{
			$this->session->set_flashdata('messages', "Passwords should match");
			$this->load->view('register');
		}
		else // if everything is ok, proceed to user insert to database
 		{
			

			$data = array(

			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'created_at'=>date('Y-m-d H:i:s', time()),
			'updated_at'=>date('Y-m-d H:i:s', time()),
			'user_level' => "normal",
			'description' => "No description yet"
			);
		

			$this->load->model('User');
			$result = $this->User->insert($data);	

			if($result)
			{	
				$this->session->set_flashdata('messages1', 'User added successully');
				
                redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('messages', 'Email already exists');
		
                redirect('register');
			}

		}

	}


	public function login()
	{
		
		if($this->session->userdata('logged_in' === TRUE))
		{
			redirect('dashboard');
		}
		else
		{
		

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model('User');
		$user = $this->User->get_user_by_email($email);


		if($user && $user['password'] == $password)
		{
			$user = array(
				'user_id' => $user['id'],
				'first_name' => $user['first_name'],
				'last_name' => $user['last_name'],
				'email' => $user['email'],
				'user_level'=> $user['user_level'],
				'is_logged_in' => true

			);


			$this->session->set_userdata('user',$user);

			if($user['user_level']== 'admin'){

				redirect(base_url('dashboard/'.$user['user_level']));	
			}
			else{
			
            $this->load->view('dashboard');
            }
		}
		else
		{
			$this->session->set_flashdata('messages', "invalid email or password");
			
			$this->load->view('signin');
		}

		}

	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect(base_url('index'));
		
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function register(){
		$this->load->view('register');
	}

	public function dashboard()
	{
		$this->load->model('User');
		$data= $this->User->get_all_users();
		$this->load->view('dashboard', array('data' => $data));

	}

	public function edit($num)
	{
		$this->load->view('edit');	
	}

}