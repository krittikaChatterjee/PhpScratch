 <?php
 class Medicine extends CI_Model{

       public function __construct(){
          parent::__construct();
          $this->load->database();//$db will available to all functions of the class.
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