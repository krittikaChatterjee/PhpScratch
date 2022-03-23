<?php
  class Home extends CI_Controller{


     public function __construct(){
         parent::__construct();
         $this->load->model('Todo','td');

     }
     public function index(){
         $this->load->view('show');
     }
     public function hello(){
         //echo "Hello AJAX";
        $todo = $this->td->getAll();
       # print_r($todo);

        echo "<table class='table table-bordered table-hover'>
                   <tr>
                      <th>Action</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created</th>
                   </tr>


       " ;
        foreach($todo as $t){
            echo "<tr>";
          echo "<td><button type='button' onclick='delete1($t->id)' class='btn btn-sm btn-primary'>Delete</button></td>";
            echo "<td>".$t->title."</td>";
            echo "<td>".$t->description."</td>";
            echo "<td>".$t->created."</td>";
            echo "</tr>";
        }  
        echo "</table>";


       
     }
     #This will take on the AJAX Request add into database
      public function submit(){
        // print_r($this->input->post());     
         $data = $this->input->post();
         $count =  $this->td->addTodoList($data);
         if($count == 1)
         echo "success";
         else
         echo "error";  

  }
    #Accessing Path variable project/index.php/home/delete/[id]
    public function delete($id){
       $count = $this->td->deleteTodoList($id);
       if($count==1)
       echo "success";
       else
       echo "error";


   }
   public function search($value){
     $todo = $this->td->customSearch($value);
     //print_r($data);
      if(count($todo)!=0){
      echo "<table class='table table-bordered table-hover'>
                   <tr>
                      <th>Action</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created</th>
                   </tr>


       " ;
        foreach($todo as $t){
          echo "<tr>";
          echo "<td><button type='button' onclick='delete1($t->id)' class='btn btn-sm btn-primary'>Delete</button></td>";
          echo "<td>".$t->title."</td>";
          echo "<td>".$t->description."</td>";
          echo "<td>".$t->created."</td>";
          echo "</tr>";
        }  
        echo "</table>";

      }
      else{
        echo "error";
      }


      
   }


  }
?>
