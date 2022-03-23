<?php
//helper is basically a task which help us to perform a specific role.
//It is written in procedural language
//only one disadvantage of helper is that ,it is written in porcedural language,lack of security and reusability
//Multiple helper can have same named function..for that we need to use function_exists() method
if(!function_exists("hello")){
function hello(){
	return 'Hello Helper';
}}



?>