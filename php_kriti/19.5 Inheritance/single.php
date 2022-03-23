<?php 
//Super Class
 class A {
    
 	public function show(){
 		echo "This is from Class A<br/>";
 	}
 }
//Sub Class
 class B extends A{ 
     
    public function show2(){
    	
    	echo "This is from Class B<br/>";
    }

}


 $obj = new B();

 $obj->show();//Calling from Parent class 
 $obj->show2();//Calling from B class

?>