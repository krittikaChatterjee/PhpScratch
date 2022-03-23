<!DOCTYPE html>
<html>
<head>
	<title>php7 special case</title>
</head>
<body>

	  <h1>Scalar Type Declration :</h1>
	  <?php 
             function add(float $x,float $y):float{
             	return $x+$y;
             }

             echo add(12.22,20.33);
             echo "<br/>";

             function fullName(String $fname,String $lname):String{
             	return $fname. ' '.$lname;
             }

             echo fullName('Krittika','Chatterjee');
             echo "<br/>";


             echo intdiv(10,3);

	  ?>
	  <h1>Constant Array</h1>
	  <?php 
        define("ar",[22,33,44]);
        echo ar[0];

	  ?>


	  <h1>Spaceship Operator</h1>
	  <?php 
            $a =5; $b =1;

            echo $a<=>$b;

	  ?>

	  <h1>Null Coelscing Operator</h1>

	  <?php 
	      //$x =100;
          /*
           if(isset($x))
           	  echo $x;
           	else echo "No Variable";
          */
          $l = $x ?? 'No Value';
          echo $l;
            
	  ?>

</body>
</html>