 <?php
 class Todo extends CI_Model{

       public function __construct(){
          parent::__construct();
          $this->load->database();//$db will available to all functions of the class.
       }

        public function getAll(){
            $q= $this->db->get('todolist');
        return $q->result(); //Std class Object
        }

        public function addTodoList($data){
            $this->db->insert('todolist',$data);
            $rows = $this->db->affected_rows();
        return $rows;
        }

        public function deleteTodoList($id){
            $this->db->delete('todolist',['id'=>$id]);
            $rows = $this->db->affected_rows();
        return $rows;
        }
        public function customSearch($key){
             $this->db->select('*');
             $this->db->from('todolist');
             $this->db->like('title',$key);
             $q=$this->db->get();
             return $q->result();
             
        }
 }
 ?>