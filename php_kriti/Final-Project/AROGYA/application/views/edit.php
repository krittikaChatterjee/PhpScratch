<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Welcome</title>
</head>
<body>
	<?php
	$data=$this->session->all_userdata();
	if (isset($data['USER']['role'])) {
		?>
		<div class="container border">
			<header class="modal-header"><h1>Edit form</h1></header>
			<?php 
			if(isset($info)){
				/*print'<pre>';
			
			print_r($info);*/
			?>
			<form method="post" autocomplete="off"  class="container border" action="<?php echo base_url(); ?>index.php/home/updateUser">
				<input type="hidden" name="id" id="id" value="<?php echo $info[0]->u_id; ?>">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="t11" id="t11" value="<?php echo $info[0]->c_name; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="number" name="t22" id="t22" value="<?php echo $info[0]->phone; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="t33" id="t33" value="<?php echo $info[0]->email; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="t44" id="t44" class="form-control" minlength="20" maxlength="200" rows="5" cols="6"><?php echo $info[0]->address; ?></textarea>
				</div>
				<div class="form-group">
					<label>Pin</label>
					<input type="number" minlength="6" maxlength="6" name="t55" id="t55" value="<?php echo $info[0]->pin; ?>" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-sm btn-secondary" name="btnUpdate" value="update">Update</button>
				</div>
			</form>
			<?php
		}else{
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Unable To update</div>");
			echo "<script>
			
			window.history.back();
			</script>";
		}
			?>
		
		
		
	</div>
		<?php
		
	}else{
		$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Access denied...you need to login first</div>");
		redirect(base_url()."index.php/home/login");
	}

	 ?>
	

</body>
</html>