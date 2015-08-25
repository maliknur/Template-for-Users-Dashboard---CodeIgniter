<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Wall extends CI_Model {



public function get_all_messages_by_id($num)
	{
		$query = $this->db->query("SELECT m.id, m.messageboard_id, m.created_at, m.message, u.first_name, u.last_name, u.profile_img_path   FROM messages m JOIN users u ON m.users_id=u.id WHERE messageboard_id=".$num)->result_array();

		if($query){

			return $query;

		}
		else{
			return false;
		}
	}


	public function insert($data, $table){

		$result = $this->db->insert($table, $data);

		if($result){ return true;} else {return false;}

	}


	public function get_all_comments_by_id($num)
	{
		$query = $this->db->query("SELECT c.messages_id, u.first_name, u.last_name, 
			c.comment, c.id, c.created_at FROM comments c join users u on u.id = c.users_id
			where c.messages_id = ".$num)->result_array();

		if($query){

		
		return $query;

		}
		else{
			return false;
		}
	}


	public function post_comment($data)
	{
		
	}









}