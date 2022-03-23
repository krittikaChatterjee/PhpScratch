<!DOCTYPE html>
<html>
<head>
	<title>Php ArrayS</title>
</head>
<body>

	 

	 <?php
echo "<h1>associative array</h1>";
$age["kriti"]="20";
$age["payel"]="21";
$age["khushi"]="22";
print_r($age);

echo "<h1>Array of Array or Nested Array</h1>";
          $books = [
               0=>['book_id'=>1001,'book'=>'C Programming'],
               1=>['book_id'=>1002,'book'=>'Angular'],
               2=>['book_id'=>1003,'book'=>'React'],
               3=>['book_id'=>1004,'book'=>'Vue.js']
          ];
         //print '<pre>';
        // print_r($books);
echo "<h1>accessing Multi dimension array</h1>";
         echo $books[2]['book'];

         echo "<h1>foreach</h1>";


         foreach($books as $k=>$v){
              //print_r($v);
            foreach($v as $k1=>$v1){
               echo $k1." is ".$v1."<br/>";
            }
         }




	  ?>

</body>
</html>