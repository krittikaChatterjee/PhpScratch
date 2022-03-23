<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Users','um');
	}
	public function index(){
		$this->load->view('home');
	}
	public function registration(){
		/*uploading user information*/
		if ($this->input->post('btnReg')=='registration') {
			//print_r($this->input->post());
			$name=$this->security->xss_clean($this->input->post('t1'));
			$phone=$this->security->xss_clean($this->input->post('t2'));
			$email=$this->security->xss_clean($this->input->post('t3'));
			$address=$this->security->xss_clean($this->input->post('t4'));
			$pin=$this->security->xss_clean($this->input->post('t5'));
			$password=hash_pass($this->security->xss_clean($this->input->post('p1')));
			if(!file_exists("uploads"))mkdir("uploads");
			$imgPath="";
			 $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
               // print'<pre>';
             if($this->upload->do_upload('img')){
             	$data['FILE']=['upload_data'=>$this->upload->data()];
             //	print_r($data);
             	foreach ($data as $d) {
             	//	echo $d['upload_data']['file_name'];
             		if ($d['upload_data']['is_image']==TRUE) {
             			$imgPath="uploads/".$d['upload_data']['file_name'];
             		} else {
             			exit(0);
             		}
             		
             	}

             }else{
             	$error = array('error' => $this->upload->display_errors());
             	echo "<div class='alert alert-danger'>".$error['error']."</div>";
             }





			$data=[
				'c_name'=>$name,
				'phone'=>$phone,
				'email'=>$email,
				'address'=>$address,
				'pin'=>$pin,
				'pic'=>$imgPath,
				'password'=>$password
				];
			 $count=$this->um->insertUsers($data);
			 if ($count==1) {
			 	$this->session->set_flashdata('msg',"<div class='alert alert-success'>You have Registered Successfully</div>");
			 	//$this->load->view('registration');
			 	redirect(base_url()."index.php/home/login");
			 } else {
			 	$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Registration Failed</div>");
			 	$this->load->view('registration');
			 }
			 

		} else {
			$this->load->view('registration');
		}
		
		
	}


	public function login(){
		if ($this->input->post('btn')=='login') {
			//print_r($this->input->post());
			 $username=$this->security->xss_clean($this->input->post('uname'));
			 $password=hash_pass($this->security->xss_clean($this->input->post('pass')));
			$result=$this->um->login($username,$password);
			//print_r($result);
			if (count($result)!=0) {
				$info=[
				'id'=>$result[0]->u_id,
				'name'=>$result[0]->c_name,
				'phone'=>$result[0]->phone,
				'email'=>$result[0]->email,
				'address'=>$result[0]->address,
				'pin'=>$result[0]->pin,
				'role'=>$result[0]->role,

				];
				print_r($info);
				$this->session->set_userdata('USER',$info);
				redirect(base_url()."index.php/home/index");

			} else {
				$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Invalid username or password </div>");
				redirect(base_url()."index.php/home/login");
			}
			
			
		} else {
			$this->load->view('login');
		}
/*
		$this->load->view('login');
		print_r($this->input->post());
*/
			
		 
			

		
		
	
	}

	public function logout(){
		//echo "ok";
		$info=[
				'id'=>0,
				'name'=>NULL,
				'phone'=>0,
				'email'=>NULL,
				'address'=>NULL,
				'pin'=>0,
				'role'=>0,

				];
		$this->session->unset_userdata('USER',$info);
		$this->session->set_flashdata('msg',"<div class='alert alert-danger'>You have Successfully Logged Out</div>");
		redirect(base_url()."index.php/home/login");

	}
	public function showUsers(){

		/*fetching Uesrs data for admin panel */
		$info=$this->um->showUsers();
		//print_r($info);
		$this->load->view('users',['rec'=>$info]);

	}
	public function profile(){

	$data=$this->session->all_userdata();
	/*profile Routing*/
	if ($data['USER']['role']=='Admin') {
		redirect(base_url()."index.php/home/showUsers");
	} elseif ($data['USER']['role']=='Regular') {
		redirect(base_url()."index.php/home/userProfile");
	}else{
		$this->session->set_flashdata('msg',"<div class='alert alert-danger'>You need to login first</div>");
		redirect(base_url()."index.php/home/login");
	}
	
	
	}
	public function userProfile(){
		/*display data of indivisual user*/
		$data=$this->session->all_userdata();
	/*print'<pre>';
	print_r($data);*/
	$id= $data['USER']['id'];
	$q=$this->um->profile($id);
	//print_r($q);
	$this->load->view('profile',['profile'=>$q]);
	}

public function DelUser($id=0){
	/*deleting user data from admin panel*/
	$data=$this->session->all_userdata();
	if ($data['USER']['role']=='Admin') {
		$res=$this->um->deleteUser($id);
		if ($res==1) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'>One list deleted successfully</div>");
			echo "<script>
			window.history.back();
			</script>";
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Operation failed...try again</div>");
			echo "<script>
			window.history.back();
			</script>";
		}
		
	}
	/*elseif ($data['USER']['role']=='Regular') {
		// code for deleteing regular user data from user panel
		change model function name
	}*/else{
		echo "<script>
			alert('Not Allowed enter');
			window.history.back();
			</script>";
	}

}

public function updateUser($id=0){
	$data=$this->session->all_userdata();
	if ($data['USER']['role']=='Admin') {
		if ($this->input->post('btnUpdate')=='update') {
			//print'<pre>';
			//print_r($this->input->post());
			$id=$this->security->xss_clean($this->input->post('id'));
			$name=$this->security->xss_clean($this->input->post('t11'));
			$phone=$this->security->xss_clean($this->input->post('t22'));
			$email=$this->security->xss_clean($this->input->post('t33'));
			$address=$this->security->xss_clean($this->input->post('t44'));
			$pin=$this->security->xss_clean($this->input->post('t55'));
			$data=[
				'c_name'=>$name,
				'phone'=>$phone,
				'email'=>$email,
				'address'=>$address,
				'pin'=>$pin
					];
		//	print_r($data);
			$res=$this->um->editUser($data,$id);
			if ($res==1) {
				$this->session->set_flashdata('msg',"<div class='alert alert-success'>One list updated successfully</div>");
			} else {
				$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Failed to update</div>");
			}
			redirect(base_url()."index.php/home/showUsers");
			


		} else {
			$res=$this->um->getUserById($id);
		/*print'<pre>';
		print_r($res);*/
		$this->load->view('edit',['info'=>$res]);
		}
		
		
	}
	/*elseif ($data['USER']['role']=='Regular') {
		in this case $id=$data['USER']['id'] so that he cant access other profile
	}*/
	else{
		echo "<script>
			alert('Not Allowed enter');
			window.history.back();
			</script>";
	}
}
	
	
} 
?>