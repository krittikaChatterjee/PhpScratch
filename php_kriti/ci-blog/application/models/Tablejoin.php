<?php
class Tablejoin extends CI_model{
 public function getAll(){
    $this->load->database();
$empDept = $this->db->select('e.ename,d.dept')
                     ->from('emp as e')
                     ->join('dept as d','e.dept_id = d.dept_id','INNER')
                     ->get();
  return $empDept->result();
}}
  ?>
