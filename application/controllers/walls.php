<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walls extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	
	}

    // main page

	public function show($num)
	{	$this->load->model('User');
		$result = $this->User->get_user_by_id($num);

		$this->load->model('Wall');
		$wall = $this->Wall->get_all_messages_by_id($num);

		// $comments = $this->Wall->get_all_messages_by_id($num);
			
		   $this->load->view('show', array('result'=>$result, 'wall'=>$wall));


	}

	public function forum()
	{
		$this->load->view('forum');
	}

	public function post_message()
	{

		$data = array(
			"message" => $this->input->post('message'),
			"created_at" => date('Y-m-d H:i:s', time()),
			"updated_at" => date('Y-m-d H:i:s', time()),
			"users_id" => $this->input->post('user_id'),
			"messageboard_id" =>$this->input->post('messageboard_id')
		);

		$table = "messages";

		$this->load->model('Wall');
		$return = $this->Wall->insert($data, $table);

		if($return)
		{
			redirect(base_url('/users/show/'.$data['messageboard_id']));
		}



	}


	public function post_comment()
	{

		$data = array(
			"comment" => $this->input->post('comment'),
			"created_at" => date('Y-m-d H:i:s', time()),
			"updated_at" => date('Y-m-d H:i:s', time()),
			"messages_id" => $this->input->post('messages_id'),
			"users_id" =>$this->input->post('user_id')
		);

		$messageboard_id = $this->input->post('messageboard_id');

		$table = "comments";

		$this->load->model('Wall');
		$return = $this->Wall->insert($data, $table);

		if($return)
		{
			redirect(base_url('/users/show/'.$messageboard_id));
		}



	}









}