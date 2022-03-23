<?php
class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Users','um');
    }
	
	public function submit(){
     //$this->load->view('insert');
		if($this->input->post('btn')=='btn')
		{
           $name=$this->input->post('t1');

           $data=[
                 'cname'=>$name,
                 ];
           $count=$this->um->submit($data);
           
           if ($count==1) 
             echo"inserted";
           else 
            echo"failed";      
		}
		else{
             $this->load->view('insert');
		    }
	}

	//to read data
	public function show(){
		$info=$this->um->showAll();
		$this->load->view('read',['rec'=>$info]);

	}
	//to delete 
	public function del($id=0){
		$res=$this->um->delData($id);
		if($res==1)
			echo"deleted";
		else echo"failed";
	}

	//to uptade data
	public function update($id=0){
		if($this->input->post('btnup')=='btnup')
			{
           $name=$this->input->post('t11');

           $data=[
                 'cname'=>$name,
                 ];
           $count=$this->um->updateData($data);
           
           if ($count==1) 
             echo"Updated";
           else 
            echo"failed";      
		}
		else{
             $this->load->view('read');
		    }
	}

	}



?>