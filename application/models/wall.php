<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Wall extends CI_Model {



public function get_all_messages_by_id($num)
	{
		$query = $this->db->query("SELECT m.id, m.messageboard_id, m.created_at, m.message, u.first_name, u.last_name  FROM messages m JOIN users u ON m.users_id=u.id WHERE messageboard_id=".$num)->result_array();

		if($query){

		
		
			return $query;

		}
		else{
			return false;
		}
	}








}