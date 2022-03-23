<?php 
  class Test3{
     //adding some data members
  	 private $x = 0;
  	 private $y = 0;
  	//adding Parameterized Constructor
  	 public function __construct($a,$b){
           $this->x = $a;
           $this->y = $b;
  	 }
  	 //add user defined function 
  	 public function add(){
  	 	return $this->x + $this->y;
  	 }

  	 public function sub(){
  	 	return $this->x - $this->y;
  	 }

  	 public function mult(){
  	 	return $this->x * $this->y;
  	 }

  	 public function div(){
  	 	return $this->x / $this->y;
  	 }

  	 public function avg(){
  	 	return ($this->x + $this->y)/2;
  	 }
  }


    $obj = new Test3(12,2);
    $r1= $obj->add();
    $r2= $obj->sub();
    $r3= $obj->mult();
    $r4= $obj->div();
    $r5= $obj->avg();

    echo "Sum is ".$r1;
    echo "<br/>";
    echo "Sub is ".$r2;
    echo "<br/>";
    echo "Mult is ".$r3;
     echo "<br/>";
    echo "Div is ".$r4;
    echo "<br/>";
    echo "Avg is ".$r5;
   
    
?>