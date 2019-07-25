<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {
	public function last($table, $id, $cols = 'DESC')
	{
		$this->db->order_by($id, $cols);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function read($table, $id = array())
	{
		if(empty($id)){
			$query = $this->db->get($table)->result();
		}else{
			$query = $this->db->get_where($table, $id)->row();
		}

		return $query;
	}

	public function readby($table, $id)
	{
		$this->db->order_by($id, 'DESC');
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function read_id($table, $id = array(), $idby = '')
	{
		if(!empty($idby)){
			$this->db->order_by($idby, 'DESC');
		}
		$query = $this->db->get_where($table, $id);
		return $query->result();
	}

	public function update($table, $fields = array(), $id = array())
	{
		$id_key = array_keys($id);
		$id_val = array_values($id);
		$this->db->where($id_key[0], $id_val[0]);
		$this->db->update($table, $fields);
	}

	public function delete($table, $id = array(), $url)
	{
		if(!empty($id)){
    		$this->db->delete($table, $id);
    		redirect(site_url($url));
    	}
	}

	public function status($table, $fields = array(), $id = array(), $url)
	{
		$this->update($table, $fields, $id);
		redirect(site_url($url));
	}
}