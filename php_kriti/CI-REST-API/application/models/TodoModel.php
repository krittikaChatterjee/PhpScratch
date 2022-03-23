<?php  
  class TodoModel extends CI_Model{
   public function __construct(){
       parent::__construct();
       $this->load->database();
   }    
   #Getting all data from todolist table.
   public function todolist(){
       $q=$this->db->get('todolist');
       return $q->result();
   }
   #Getting Specific Todo List
   public function getTodo($id){
       $q= $this->db->get_where('todolist',['id'=>$id]);
    return $q->result();
   }
   #adding Post
   public function addTodo($data){
    $this->db->insert('todolist',$data);
    $rows = $this->db->affected_rows();
    return $rows;
   }
   #deleting todo
   public function removeTodo($id){
       $this->db->delete('todolist',['id'=>$id]);
       $rows = $this->db->affected_rows();
    return $rows;
   }
   #Update todo
   public function updateTodo($id,$data){
       $this->db->update('todolist',$data,['id'=>$id]);
       $rows = $this->db->affected_rows();
    return $rows;
   }
  }
?>

