<?php
if(!function_exists('hash_pass')){
	function hash_pass($input){
		//message digit 5for hashing of password
		return md5($input);
	}
}



?>