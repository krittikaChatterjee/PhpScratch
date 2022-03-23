<?php
class Medicine  extends CI_MODEL{
public function __construct(){
	parent::__construct();
	$this->load->database();
}
	public function showProducts(){
		/*fetching all Products data */
		$q=$this->db->get('medicine');
		return $q->result();
	}
  	  	public function getUserById($id){
     $this->load->database();
      $q = $this->db->get_where('medicine',['m_id'=>$id]);
      return $q->result();

     }

     public function customSearch($key){
        $this->db->select('*');
        $this->db->from('medicine');
        $this->db->like('m_name',$key);
        $q=$this->db->get();
        return $q->result();
    }
     public function updateUser($data,$id){
      $this->load->database();
      $this->db->update('medicine',$data,['m_id'=>$id]);
      $rows = $this->db->affected_rows();
      return $rows;

     }
     public function deleteUser($id){
         #Load the Database driver
         $this->load->database();
         //ORM or Query Builder.
         $this->db->delete('medicine',['m_id'=>$id]);
        $rows = $this->db->affected_rows();
        return $rows;
        
     }

  	}

?>