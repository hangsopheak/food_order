<?php

Class Table_Model extends CI_Model{
	protected $id;
	protected $table_name;
	public function get_tables(){
		$this->db->where('is_deleted',0);
		$query = $this->db->get('tables');
		return $query->result;
	}
}