<?php
//area interface 
//Parent 1
   interface Area{
        //all methods are by default abstract.
  	     public function compute($x,$y);
   }

 //adding an abstract class
 //Parent 2
 abstract class Message{
 	   public abstract function show();
 }  

 class Circle extends Message implements Area{
 	public function compute($x,$y){
 		return 3.14*$x*$x;
 	}

 	public function show(){
 		echo "Area of circle ";
 	}
 }

 class Rectangle extends Message implements Area{
  public function compute($x,$y){
 		return $x*$y;
 	}

 	public function show(){
 		echo "Area of Rectangle";
 	}

 }



//Create the Objects
 $cir = new Circle();
 $cir->show();
 echo $cir->compute(12.3,0);
 echo "<br/>";
 $rect = new Rectangle();
 echo $rect->show();

 echo $rect->compute(12,13);


?>