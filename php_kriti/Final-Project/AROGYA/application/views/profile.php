<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	$data=$this->session->all_userdata();
	if ($data['USER']['role']=='Regular') {
		echo $data['USER']['name'];

	
	?>
	<div>
		<h1>Individual user</h1>
	<?php
	if(isset($profile)){
		print'<pre>';
		print_r($profile);

	}
	?>
</div>
	<?php  
}else{
	echo "<script>
	alert('You are not allowed to enter');
	window.history.back();
	</script>";
}

	?>

</body>
</html>