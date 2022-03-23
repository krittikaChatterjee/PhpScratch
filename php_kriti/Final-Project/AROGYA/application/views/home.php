<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<body>
	<?php 
	$data=$this->session->all_userdata();
	/*print'<pre>';
	print_r($data);*/
	//echo $data['USER']['name'];
	if(isset($data['USER']['name'])){
	?>
	<a href="<?php echo base_url(); ?>index.php/home/profile">
	<?php echo $data['USER']['name']; ?>
</a>
	<a href="<?php echo base_url(); ?>index.php/home/logout">logout</a>

<?php } ?>
<h1>home</h1>
</body>
</html>