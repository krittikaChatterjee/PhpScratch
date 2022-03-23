<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Users','um');
    }
   

     
    
//for registration************************************
   public function registration(){
        /*uploading user information*/
        if ($this->input->post('btnReg')=='registration') {
            //print_r($this->input->post());
            $name=$this->security->xss_clean($this->input->post('t1'));
            $phone=$this->security->xss_clean($this->input->post('t2'));
            $email=$this->security->xss_clean($this->input->post('t3'));
            $dob=
            $gender=
            $skill=
            $course=

            $address=$this->security->xss_clean($this->input->post('t4'));
           
           
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
             // print_r($data);
                foreach ($data as $d) {
                //  echo $d['upload_data']['file_name'];
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

//load home or the front page(as controller name and the function name should not be matched so I named it" front")
    public function front(){
        $this->load->view('home');
    }
//here we load login part*************
    public function login(){
        if ($this->input->post('btnlogin')=='login') {
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
            $this->load->view('loginPage');
        }
/*
        $this->load->view('login');
        print_r($this->input->post());
*/
            
         
            

        
        
    
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


//here we load contact page
        public function contact(){
            $this->load->view('contact');
        }


//here we load logout part******************************
        public function logout(){
        
        $info =[
                'name'    =>NULL,
                'user_id' =>0,
                'role'    =>NULL
             ];

        $this->session->unset_userdata('USER',$info);
        $this->session->set_flashdata('msg',"<div class='alert alert-success'>You have Successfully Logged Out !</div>");
        redirect(base_url()."index.php/home/login");
        
      }


} 
?>
