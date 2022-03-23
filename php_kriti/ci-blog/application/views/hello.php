<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Hello World</h1> 
<?php
if(isset($msg)){
	echo $msg;
}
if(isset($courseList)){
	foreach($courseList as $course)
	{
		echo "Course Id=>" .$course['course_id'];
		echo "Course =>" .$course['course'] . "</br>";
	}
}

?>    
</body>
</html>