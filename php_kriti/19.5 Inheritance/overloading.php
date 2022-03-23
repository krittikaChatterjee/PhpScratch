<?php 
class A{

   public function add(float $x,float $y){
    return $x+$y;
}

  public function add(float $x,float $y,float $z){
   return $x+$y+$z;
}

  public function add(int $x,int $y){
   return $x+$y;
}
  }
$obj = new A();
$obj->add(12,23); //calling integer parametered function

//it will show error as there have no concept of overloading in php
  ?>
