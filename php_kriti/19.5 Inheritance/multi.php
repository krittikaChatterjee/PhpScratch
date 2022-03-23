<?php 
  class A{
    
    public function show1(){
    	echo " This is from Class A <br/>";
    }
  }

  class B extends A{
  	public function show2(){
  		echo " This is from Class B <br/>";
  	}
  }
  class C extends B{

  	 public function show3(){
  	 	echo "This is from Class C <br/>";
  	 }
  }

$obj = new C();

$obj->show1(); 
$obj->show2(); 
$obj->show3(); 


?>