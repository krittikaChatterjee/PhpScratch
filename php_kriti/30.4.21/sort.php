<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

	 <h1>implode function in PHP.</h1>
	 <?php 
        $arr = ['Krittika','Payel','Manasi','Khushi'];
        $s = implode(' ',$arr);
        print_r($s);
	 ?>

	 <h1>Explode function in PHP.</h1> 
	 <?php
	    
         $str = "Hello#World#How#are#you?";
         $ar= explode("#",$str);
         print_r($ar);

	  ?>
	  <h1>Sort in PHP</h1>
	 <?php
         $arr = ['one','two','three','four'];
         sort($arr);
         echo "<h2>Ascending Order Sort :sort()</h2>";
         print_r($arr);
         rsort($arr);
         echo "<h2>Descending Order Sort: rsort()</h2>";
         print_r($arr);
         ?>

          <h1>Associative array Sorting.</h1>
      <?php
           $ages = [
                 'Krittika' =>31,
                 'Payel'=>25,
                 'Manasi' =>34,
                 'Khushi'  =>28
           ]; 
           
           asort($ages);
           echo "<h2>Ascending order of values in Assoctiave Array</h2>";
           print_r($ages);
           echo "<h2>Ascending order by Key</h2>";
           ksort($ages);
           print_r($ages);

           echo "<h2>Descending order by value</h2>";
           arsort($ages);
           print_r($ages);

           echo "<h2>Descending order by Key</h2>";
           krsort($ages);
           print_r($ages);
           
       ?>


</body>
</html>
