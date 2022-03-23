<?php 
 class Test4{

 	//adding Data members
 	private $fname =  NULL;
 	private $lname = NULL;

 	//adding Parameterized Constructor
 	public function __construct($f,$l){
 		$this->fname = $f;
 		$this->lname = $l;
 	}

 	//adding user defined function i.e returns fullName
 	public function fullName(){
 		return $this->fname.' '.$this->lname;
 	}
 }

  $obj = new Test4('KRITTIKA','CHATTERJEE');
  $name = $obj->fullName();
  echo "Welcome ".$name;

?>