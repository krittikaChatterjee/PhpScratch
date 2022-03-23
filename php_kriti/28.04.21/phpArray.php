<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

	 <h1>Numeric Array Example...</h1>
	 <?php 
         /*Process -1
         $cars = array('Daimler','Volvo','Toyota','BMW','Indigo');
         */
         
         //echo $cars[-1];//Error Array index is out of Bound.
	     //Printing array with structure
	     //i)print_r() => which is only used for printing array .
	     //ii)var_dump()=> showing array elements with datatypes.

	   //  print_r($cars);
          // var_dump($cars);
	  /*showing entire array using loop
        Note : in PHP array supports dynamic memory allocation.
	  */

	  /*Process -2:*/
	  $cars = ['Daimler','Volvo','Toyota','BMW','Indigo'];

	  for($i=0;$i<count($cars);$i++){
	  	echo $cars[$i]."<br/>";
	  }

	  echo "<h1>Reverse of an Array</h1>";
	  for($j=count($cars)-1;$j>=0;$j--){
	  	echo $cars[$j]."<br/>";
	  }
	  echo "<h1>even odd</h1>";

	  $arr= [11,22,33,44,55];
	  $s1=0;$s2=0;
	  for($i=0;$i<count($arr);$i++){
	  
	  	if($arr[$i] % 2 ==0){
	  		echo $arr[$i]." = even <br/>";
	  	    $s1++;
	  	}
	  	else{
	  		echo $arr[$i]." = Odd <br/>";
	  	    $s2++;
	  	}

	  }
	  echo "No of evens ".$s1;
	  echo "No of Odds ".$s2;
	  
	 ?>

</body>
</html>