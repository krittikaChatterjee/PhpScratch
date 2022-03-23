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
	public function login($var2,$var3){
		$this->db->where(['email'=>$var2,'password'=>$var3]);
		$info=$this->db->get('users');
		return $info->result();
	}
	public function showUsers(){
		/*fetching all users data for admin panel*/
		$q=$this->db->get('users');
		return $q->result();
	}
	public function profile($var){
		/*fetching data of indivisual user*/
		$pro=$this->db->get_where('users',['u_id'=>$var]);
		return $pro->result();
		
	}
	public function deleteUser($var){
		/*for admin Panel*/
		/*deleting user profile*/
		$this->db->delete('users',['u_id'=>$var]);
		$rows=$this->db->affected_rows();
		return $rows;
	}

	public function getUserById($var1){
		/*fetching data of user for updating*/
		$q=$this->db->get_where('users',['u_id'=>$var1]);
		return $q->result();
	}

	public function editUser($data,$var2){
		/*inserting updated value*/
		$this->db->update('users',$data,['u_id'=>$var2]);
		$rows=$this->db->affected_rows();
		return $rows;
	}
}
?>