<?php
class Users extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	//insert data
	public function submit($var1){
		$this->db->insert('contacts',$var1);
		$rows=$this->db->affected_rows();
		return $rows;
	}
    //read data
	public function showAll()
	{
		$q=$this->db->get('contacts');
		return $q->result();
	}
	//delete data
   public function delData($var2){
   	$this->db->delete('contacts',['id=>$var2']);
   	$rows=$this->db->affected_rows();
   	return $rows;
}
  //update data(read first)
     public function getUserById($var3){
     $q=$this->db->get_where('contacts',['id=>$var3']); 
     return $q->result();
   }

   public function updateData($data,$var4){
   	$this->db->update('contacts',$data,['id=>$var4']);
   	$rows=$this->db->affected_rows();
   	return $rows;
}


?>