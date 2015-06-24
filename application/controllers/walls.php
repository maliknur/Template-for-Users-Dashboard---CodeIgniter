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

	
	   $this->load->view('show', array('result'=>$result, 'wall'=>$wall));


	}




}