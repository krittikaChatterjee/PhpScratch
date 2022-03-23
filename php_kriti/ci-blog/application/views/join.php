<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Employee</th>
			<th>Department</th>
		</tr>
		<?php
		foreach ($rec as $r)
		 {
			// code...
		?>

		<tr>
			<td><?php echo $r->ename; ?></td>
			<td><?php echo $r->dept;?></td>
		</tr>
	       <?php } ?>
	    </table>
        }

</body>
</html>