<?php
 require APPPATH.'libraries/REST_Controller.php';

 class Todo extends REST_Controller{
   public function __construct(){
       parent::__construct();
       $this->load->model('TodoModel','tm');

   }
   //for get method
     public function index_get($id=0){
         if(empty($id)){
        $todos = $this->tm->todolist();
        #sending an JSOn Response
        $this->response($todos,202);
       }else{
         $todo = $this->tm->getTodo($id);
         $this->response($todo,200);      
       }     
     }

     //for Post method
     public function index_post(){
         $data = $this->input->post();
        $count = $this->tm->addTodo($data);
        if($count ==1)
            $this->response(['msg'=>'success'],201);
        else
            $this->response(['msg'=>'error'],402);

     }

     //for delete method
     public function index_delete($id){
         $count = $this->tm->removeTodo($id);
        if($count ==1)
         $this->response(['msg'=>'deleted'],200);
        else
         $this->response(['msg'=>'error'],403);

     }
     //for put method
     public function index_put($id){
         $data = $this->put();
         $count =$this->tm->updateTodo($id,$data);
        if($count ==1)
            $this->response(['msg'=>'updated'],200);
        else
            $this->response(['msg'=>'error'],403);
        
     }

 }
?>
