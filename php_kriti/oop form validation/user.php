<?php 
 class User{

 	 //adding Datamembers
 	 private $name = NULL;
 	 private $phone=0;
 	 private $email=NULL; 
 	 private $address=NULL;	 
 	 private $salary=0;
 	 private $age  =0;
 	 private $pass=NULL;
 	 private $cpass=NULL; 
 	 private $gender = NULL;
 	
 	 

 	 //adding Paremterized Constructor
 	 public function __construct($nm,$ph,$mail,$add,$sal,$ag,$pass,$cpass,$gen){
 	 	$this->name       = $nm;
 	    $this->phone       = $ph;
 	 	$this->email       = $mail;
 	 	$this->address      = $add;
 	 	$this->salary      = $sal;
 	 	$this->age         = $ag;
 	 	$this->pass        = $pass;
 	 	$this->cpass       = $cpass;
 	 	$this->gender     = $gen;
 	 }

 	 //returning output in associative array
 	 public function getUser(){
 	 	$data = [
              'name'        => $this->name,
              'phone'        => $this->phone,
              'email'        => $this->email,
              'address'        => $this->address,
              'salary'        => $this->salary,
              'age'        => $this->age,
              'pass'        => $this->pass,
              'cpass'        => $this->cpass,
              'gender'      => $this->gender
 	 	];

 	 	return (array) $data;
 	 }
 }
?>