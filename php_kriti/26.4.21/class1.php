<!DOCTYPE html>
<html>
<head>
	<title>php class1</title>
	<style type="text/css">
		#d1{
			background-color: lightblue;
			color:black;
			height:300px;
			width:300px;
			text-align: center;

		}
		#d1:hover{
			background-color: blue;
			color:white;
		}
	</style>
</head>
<body>

	  <h1>Welcome to PHP</h1>
	  <?php 
        
        
         
	    $x =10;
	    $y = 20;
	    $p=30;
	    $q=3;
	    $z =$x+$y+$p;
        $z1=$x-$y;
        $z2=$x*$y;
        $z3=$z/$q;
	   
	    echo "<div id='d1'>";
	    	echo "<h1>calculation</h1>";
	    echo "Sum is".$z."<br/>";
	    echo "Sub is".$z1."<br/>";
	    echo "Mult is".$z2."<br/>";
	    echo "avg is".$z3."<br/>";
        echo "</div>";


        echo "<h1>Print Current Date in PHP</h1>";
        //Print Current Date in PHP 
        //echo date('d-m-y');
        $d = date('D');

        if($d =='Mon' || $d=='Tue' || $d=='Wed' || $d=='Thu' || $d=='Fri'){
        	echo $d." is Working Day";
        }else{
        	echo $d." is Holiday";
        }


       echo "<h1>finding greater no among 3 Nos</h1>"; 
       echo "<br/>";
       $a=111;$b=23;$c=25;
       if($a>$b && $a>$c)
       echo "Greater NO is".$a;
        else if($b>$a && $b>$c)
        	echo "Greater No is ".$b;
        else if($c>$a && $c>$b)
        	echo "Greater No is ".$c;
        else
        	echo "$a=$b=$c";


      echo "<h1>Find greater no between 2 Nos</h1>";
      $a=111;$b=23;
      if($a>$b)
        	echo "Greater NO is".$a;
        else if($b>$a)
        	echo "Greater No is ".$b;
        
        else
        	echo "$a=$b";




    echo "<h1>Find out odd & even no using Switch Case Block</h1>";
     echo "<br/>";
      $p=78; 
      $q = $p%2;
      if($p==0){
      	echo "Neither Odd nor even";
      	exit(0);
      } 
      switch($q){
      	case 0: print($p." = Even"); break;
      	case 1: print($p." = Odd"); break;
      	default: echo "Neither Odd nor Even";

      } 


echo "<h1>Example of do-While Loop</h1>";
     /*Loop Example In PHP */
     $i=100;
     do{
         //statement
     	  echo $i."<br/>";
     	  $i=$i+1;
     }while($i<=5);
     

echo "<h1>Example of While Loop</h1>";
$i=1;
while($i<=5){
	echo $i."<br/>";
	$i+=1;
}

echo "<h1>Example of For Loop</h1>";
for($i=5;$i<=10;$i++){
	echo $i."<br/>";
}

echo "<h1>finding lesser no between 2 Nos</h1>";
      //finding greater no between 2 Nos.
        $a=111;$b=23;

        if($a<$b)
        	echo "Lesser NO is".$a;
        else if($b<$a)
        	echo "Lesser No is ".$b;
        
        else
        	echo "$a=$b";


        	echo "<h1>sum with 2 variable</h1>";

	    $x =10;
	    
	    $sum =$x+20;
	    echo "sum is".$sum."<br/>";
        


	    
    ?>


</body>
</html>