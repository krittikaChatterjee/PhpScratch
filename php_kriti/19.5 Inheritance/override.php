<?php
class A{
  public function show(){
   echo "Hello from class A";
}
}

class B extends A{
  public function show(){
  echo "This is class B";
}
}

$obj = new B();
$obj->show();
?>