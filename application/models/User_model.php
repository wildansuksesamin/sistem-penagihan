<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	private $tabel = 'tb_user';
	
	public function tampilUser()
	{
		$query = $this->db->get($this->tabel);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}

	public function tampilUserById($id)
	{
		$this->db->where('id_user', $id);
		$query = $this->db->get($this->tabel);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return FALSE;
		}
	}

	public function insertUser($data)
	{
		$this->db->insert($this->tabel, $data);
		if ($this->db->affected_rows()>0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function updateUser($id,$data)
	{
		$this->db->where('id_user', $id)
		->update($this->tabel, $data);
		
		if ($this->db->affected_rows()>0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function deleteUser($id)
	{
		$this->db->where('id_user', $id)
		->delete($this->tabel);

		if ($this->db->affected_rows()>0) {
			return true;
		}else {
			return false;
		}
	}
}

/* End of file User_model.php */
