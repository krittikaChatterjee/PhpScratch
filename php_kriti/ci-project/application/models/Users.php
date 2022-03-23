<?php 
class Users extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insertUsers($var1){
		$this->db->insert('users',$var1);
		$rows=$this->db->affected_rows();
		return $rows;
	}

	public function customSearch($key){
		$this->db->select('*');
		$this->db->from('medicine');
		$this->db->like('m_name',$key);
		$q=$this->db->get();
		return $q->result();
	}
}
?>