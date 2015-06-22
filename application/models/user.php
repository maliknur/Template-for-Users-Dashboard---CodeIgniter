<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Model {

	//look for user by email - LOGIN PROCESS

	public function get_user_by_email($email)
	{
		$this->db->select('*');
		$this->db->from('dojo.users');
		$this->db->where('email', $email);
		$query = $this->db->get();

		if($query->num_rows()>0){

			$result = $query->row_array();
			
			return $result;

		}
		else{
			return false;
		}
	}

	// INSERT USER INTO DATABASE

	public function insert($data)
	{

		//check if email already exist in database

		$condition = "email =". "'".$data['email']."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		


		if($query->num_rows() == 0)
		{
			// insert user into database;

			$result = $this->db->insert('users', $data);
			if($result)
			{
				return true;
			}
		}
		else
		{	// emails aleady exists
			return false;
		}
	}






}

