<?php
  class Test{
  	//Hide the data and show the relavant information.
    /*
      Both public and private are known as access modifier
      public : can be accessible within the class as well as 
      outside of the class.
      private : can only be accessible within the class,
      can't access outside of the class.

    */
  	private $x = 10;
  	private $y  = 20;
    
    //adding  a function 
    public function add(){
    	/*
           $this is a current Object of the class to access class datamembers directly at any functions.
    	*/
    	return $this->x+$this->y;
    }
   
    public function mult(){
    	return $this->x * $this->y;
    }

    public function sub(){
      return $this->x - $this->y;
    }

     public function div(){
      return $this->x / $this->y;
    }
  }

  /*To access class outside of it we need to create an Object*/
  /*
   How to create an Object of the  class ?
   ObjectName = new Classname();
  */

   $obj = new Test();

  
  // print $obj->x;
  // print $obj->y;
  

   $sum = $obj->add();
   $subtraction= $obj->sub();
   $multiplication= $obj->mult();
   $division= $obj->div();
   
   echo "Sum is ".$sum;
   echo "<br/>";
   echo "Sub is ".$subtraction;
   echo "<br/>";
   echo "Mult is ".$multiplication;
   echo "<br/>";
   echo "Div is ".$division;


 ?>