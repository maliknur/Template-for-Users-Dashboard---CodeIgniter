<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Model {

	//look for user by email - LOGIN PROCESS

	public function get_user_by_email($email)
	{
		$this->db->select('*');
		$this->db->from('users');
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



	public function update($data)
	{	
		$user_id = $data['id'];
		$table = 'users';
		$this->db->where('id', $user_id);
		$result = $this->db->update ($table, $data);

		return $result;


	}

	public function delete($num)
	{	
		
		$table = 'users';
		$this->db->where('id', $num);
		$result = $this->db->delete($table);

		return $result;


	}





	// GET ALL USERS
	public function get_all_users()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
		
	}
	// GET ONE USER BY ID
	public function get_user_by_id($num)
	{
		return $this->db->query("SELECT * FROM users WHERE id=".$num)->row_array();
		
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

	public function check_email($data)
	{
		var_dump($data);
		$condition = "email =". "'".$data['email']."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		$query_row = $query->result();


		$id = $query_row[0]->id;
		

		if($query->num_rows() == 0)
		{ return true;}

		// if email is same with has user to allow use same email 
		else if($data['id'] == $id)
			{return true;} 
		else
		{return false;}

	}







	} 



