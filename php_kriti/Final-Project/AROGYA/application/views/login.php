<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>index.php/home/login">
	username:<input type="text" name="uname" >
	password:<input type="password" name="pass">
	<button name="btn"  value="login">login</button>
</form>
<?php echo $this->session->flashdata('msg'); ?>

</body>
</html>