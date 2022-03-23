
<?php

  class User extends CI_Model{

    #create a constructor of the class
    public function __construct(){
      #load the parent constructor
      parent::__construct();
      #load the database driver
      $this->load->database();//cI will make $db object which is accessable to all the function of the class
    }

       #function which will retuns all users from database
        public function getAllUsers(){
            $q=$this->db->get('users');
             
          return $q->result();

        }
        public function insertUsers($data){
          //$this->load->database();
          $this->db->insert('users',$data);//syntax....insert('table_name','data')
          $rows=$this->db->affected_rows();//affected rows return either 1 or 0
          return $rows;

          
        }
        public function deleteUsers($id){
          //$this->load->database();
          $this->db->delete('users',['id'=>$id]);
          $rows = $this->db->affected_rows();
          return $rows;
        }
         public function getUserById($id){
      //$this->load->database();
      $q = $this->db->get_where('users',['id'=>$id]);
      return $q->result();

     }
     public function updateUser($data,$id){
      //$this->load->database();
      $this->db->update('users',$data,['id'=>$id]);
      $rows = $this->db->affected_rows();
      return $rows;

     }
//for login page
     public function loginUser($userName,$passWord){
      //$this->load->database();
      $this->db->where(['email'=>$userName,'pass1'=>$passWord]);
      $q= $this->db->get('users');
      return $q->result();


     }

  }
?>
