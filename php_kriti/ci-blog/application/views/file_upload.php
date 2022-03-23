<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/Fileupload/upload">
    <div>
    	<input type="file" name="file" accept="image/*"> 
    </div>
    <div>
    	<input type="submit" name="submit" value="submit">
    </div>


</form>

<?php
if(isset($FILE)){
foreach ($FILE as $f) {
	//print_r($f);
# code...
?>
<img src="<?php echo base_url(); ?>/MyUploads/<?php echo $f['file_name']?>"
height="200px" width="200px" title="<?php echo $f['raw_name'];?>"/>
<?php
}
}
?>
</body>
</html>