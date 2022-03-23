<?php
  class Home extends CI_Controller{


     public function __construct(){
         parent::__construct();
         $this->load->model('medicine','md');

     }
   
   }
   public function search($value){
     $todo = $this->td->customSearch($value);
     //print_r($data);
      if(count($todo)!=0){
      echo "<table class='table table-bordered table-hover'>
                   <tr>
                     
                      <th>Medicine Name</th>
                      <th>Description</th>
                      <th>Price</th>
                   </tr>


       " ;
        foreach($todo as $t){
          echo "<tr>";
          echo "<td><button type='button'  class='btn btn-sm btn-primary'>Delete</button></td>";
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
