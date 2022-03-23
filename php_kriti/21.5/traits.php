<?php 
  trait A{
  	  public function show(){
  	  	echo "Hello from class A";
  	  }
  }

  trait B {
  	  public function show2(){
  	  	echo "Hii from class B";
  	  }
  }

  class C {
    //we can use trait within another class without inheritance extedns keyword.
  	use A;
  	use B;

  }

  $obj = new C();
  $obj->show();
  $obj->show2();
  

?>