<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>read data</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>ACTION</th>
		</tr>

		<?php
            if(isset($rec)){
            	foreach($rec as $key)
           
		?>
		<tr>
			<td><?php echo $key->cname;?></td>
			<td><a href="<?php echo base_url();?>index.php/Home/del/<?php echo $key->id;?>">Delete</a>
			    <a href="<?php echo base_url();?>index.php/Home/update/<?php echo $key->id;?>">Edit</a>
			</td>
		</tr>

		<?php
	      }
		?>
	</table>

</body>
</html>