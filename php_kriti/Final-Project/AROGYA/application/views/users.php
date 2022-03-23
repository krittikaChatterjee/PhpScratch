<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>
	<h1>Show all Users</h1>
	<?php
	$data=$this->session->all_userdata();
	/*print'<pre>';
	print_r($data);
	echo $data['USER']['role'];*/
	if($data['USER']['role']=='Admin'){
	?>

<div>
	<h1>admin panel</h1>
	
	<?php echo $this->session->flashdata('msg'); ?>


	<table class="table table-hover table-bordered">
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Address</th>
					<th>Pincode</th>
					<th>Picture</th>
					<th>Created</th>
					<th>Action</th>
				</tr>
	<?php
	if(isset($rec)){
		//print_r($rec);
		foreach ($rec as $key) {
		/*	print'<pre>';
			print_r($key);*/
			?>
			
				<tr>
					<td><?php echo $key->c_name; ?></td>
					<td><a href="telto:<?php echo $key->phone; ?>">
						<?php echo $key->phone; ?>
							
						</a>
					</td>
					<td><a href="mailto:<?php echo $key->email; ?>">
						<?php echo $key->email; ?>
						</a>
					</td>
					<td><?php echo $key->address; ?></td>
					<td><?php echo $key->pin; ?></td>
					<td><a href="<?php echo base_url().$key->pic; ?>" target="_blank">
						<img src="<?php echo base_url().$key->pic; ?>" height="48px" width="48px" class="rounded-circle"></td>
						</a>
					<td><?php echo $key->created; ?></td>
					<td>
						<a href="<?php echo base_url(); ?>index.php/home/updateUser/<?php echo $key->u_id; ?>" class="btn btn-sm btn-primary">Edit Profile</a>
						<a href="<?php echo base_url()."index.php/home/DelUser/".  $key->u_id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this record?')">Delete Profile</a>
					</td>
				</tr>
			
			
			<?php
		}
	}
	?>
</table>
</div>
<?php 
} else{
	echo "<script>
	alert('You are not allowed to enter');
	window.history.back();
	</script>";
}
?>

</body>
</html>