<?php
 class Course extends CI_Model{
 	public function getCourses(){
 		$data=[
 			0=>['course_id'=>1001,'course'=>'Angular'],
            1=>['course_id'=>1002,'course'=>'PHP'],
            2=>['course_id'=>1003,'course'=>'REACT']



 		];
 		return $data;
 	}
 }





?>