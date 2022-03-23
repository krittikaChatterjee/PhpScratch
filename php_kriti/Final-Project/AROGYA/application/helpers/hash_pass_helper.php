<?php
if(!function_exists('hash_pass')){
	 function hash_pass($var1){
		$result=md5($var1);
		return $result;
	}
}
?>