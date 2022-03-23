<?php  
  abstract class RBI {
  	/*public function __construct(){
  		echo "RBI";
  	}
  	*/
  	//since it is an abstract class , so it doesnot speicy a body.
        //function declration but no defination
        public abstract function interest();
        //concrete
        public function show(){
        	echo "Example of Data abstraction !";
        }	
  }


  class AXIS extends RBI{
  	  /*
  	   public function __construct(){
  	   	echo "AXIS";
  	   }
  	   */
  	   
        public  function interest(){
        	return "3%";
        }	
  }

  class ICICI extends RBI{
  	    public  function interest(){
  	    	return "3.5%";
  	    }
  }

  class KOTAK extends RBI{
  	    public  function interest(){
  	    	return "5%";
  	    }
  }

  $objAxis = new AXIS();
  $objICICI = new ICICI();
  $objKOTAK = new KOTAK();

  echo "Interest for AXIS =>".$objAxis->interest();
  echo "<br/>";
  echo "Interest for ICICI =>".$objICICI->interest();
  echo "<br/>";
  echo "Interest  for KOTAK=>".$objKOTAK->interest();

  /*
    This aka Runntime Polymorphism , because interset() is giving me different outputn w.r.t different child class.
    This we can achieve by using abstraction .

    1)We can't create Object of abstract class directly.
    2)In a abstract class atleast one method has to be abstract,
      rest of the method can be concrete also.

  */
echo "<br/>";
  $objKOTAK->show();


?>