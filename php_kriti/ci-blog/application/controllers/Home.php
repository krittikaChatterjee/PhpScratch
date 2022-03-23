<?php 
 class Home extends CI_Controller{
        #create a constructor of the class
    public function __construct(){
        #load the parent constructor
      parent::__construct();
      $this->load->model('User','um');

    //load the session library here and in autoload ..leave blank the array

    $this->load->library('session');
    }

    
 	public function index(){
        echo hello();
 		$this->load->model('Course','cm');
 		$data=$this->cm->getCourses();
 		$this->load->view('hello',['courseList'=>$data]);
 	}

    #this function will load a view
    public function show(){
        $this->load->view('form');
    }
    #this will handel the submitted data
    public function submit(){
        #CI supports php supper global variable
        #CI is written on the top of php but better to use CI Way of accepting data
        //print_r($_POST);
        #CI way are standard class object
        #print_r($this->input->post());
        $name=$this->security->xss_clean(
              $this->input->post('t1'));
        $phone=$this->security->xss_clean(
               $this->input->post('t2'));
        $email=$this->security->xss_clean($this->input->post('t3'));
        $pass1=hash_pass($this->security->xss_clean($this->input->post('p1')));

         if(!file_exists('uploads')) mkdir('uploads');
      $imagePath="";
     //file upload code goes here ...
      $config['upload_path']='./uploads/';
      $config['allowed_types']='jpg|jpeg|gif|png';
      $config['max_size']             = 10000;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;

     //print '<pre>';
      //loading the upload library
      $this->load->library('upload',$config);
      

        if($this->upload->do_upload('avatar')){
             $data['FILE'] = ['upload_data'=>$this->upload->data()];
             //print_r($data);
             foreach($data as $d){
              //echo $d['upload_data']['file_name'];
               if($d['upload_data']['is_image']==TRUE)
                 $imagePath='uploads/'.$d['upload_data']['file_name'];
               else{
                exit(0);
               }

             }
      }else{
          $error = ['error'=>$this->upload->display_errors()];
          //print_r($error);
          echo "<div class='alert alert-danger'>".$error['error']."</div>";
          exit(0);
      }

        //generating an associative array
        $data=[
            'cname'=>$name,//key name has to be same with database table column name
            'phone'=>$phone,
            'email'=>$email,
            'pass1'=>$pass1,
            'pic'=>$imagePath
         ];
         print_r($data);
         $this->load->model('User','um');
         $count=$this->um->insertUsers($data);
         if($count==1){
            $this->load->view('form',['msg'=>'Success']);
         }
         else{
            $this->load->view('form',['msg'=>'Error']);
         }

        
   } 
public function users(){
    //$this->load->model('User','um');
    $data=$this->um->getAllUsers();
    //print_r($data);
    $this->load->view('showUsers',['users'=>$data]);
}

//to delete row
//first we have to use path variable to get the perticular id from database which i want tp delete
//the actual routing is..... index.php/controller/function/parameter  (here..index.php/Home.php/del/1)
//so we have to go to showusers and set the path
public function del($id){
    //echo $id;
    //$this->load->model('user','um');
    $count=$this->um->deleteUsers($id);
    if($count==1){
        /*$this->users();
    }
    else
        echo "unable to delete";

         //return redirect using flash message
      //what is flash message =>One time message.
      //load the session library*/
      
         $this->session->set_flashdata('msg','One User deleted');  
      }else{
         $this->session->set_flashdata('msg','Unable to Delete User !');
      }
      redirect(base_url()."index.php/home/users");  
      }
     
      
public function editForm($id=0){
      if($this->input->post('btnUpdate')=='update'){
             $update_records = [
               'cname'  =>
               $this->security->xss_clean(
               $this->input->post('t11')
               ),
               'phone'=>$this->security->xss_clean(
                        $this->input->post('t22')
               ),
               'email'=>$this->security->xss_clean(
                        $this->input->post('t33')
               )

             ];
            
             $id = $this->input->post('hid');

            // print '<pre>';
            // print_r($update_records);
            //$this->load->model('User','um');
            $count = $this->um->updateUser($update_records,$id);

            if($count == 1){
               $this->session->set_flashdata('msg',"<div class='alert alert-success'>One User Updated</div>");
            }else{
              $this->session->set_flashdata('msg',"<div class='alert alert-danger'>Unable to Perform Updataion !</div>");

            }

            redirect(base_url()."index.php/home/users");



      }else{
      #Loading the Model
        //$this->load->model('User','um');
        $data= $this->um->getUserById($id);
        #print '<pre>';
        #print_r($data);
        $this->load->view('editForm',['userInfo'=>$data]);
      
      }
    
}

//for login ..........................................................
public function login(){
      if($this->input->post('btnLogin')=='login'){
        
          //$this->load->model('User','um');
          $user = $this->um->loginUser(
            $this->input->post('uname'),
            hash_pass($this->input->post('pass1'))
          );
           //print '<pre>';
           //print_r($user);
           $info =[]; #Empty array
           if(count($user)!=0){
            //Let's Store some information using session
             $info =[
                'name'    =>$user[0]->cname,
                'user_id' =>$user[0]->id
             ];
             //save this information in session
             $this->session->set_userdata('USER',$info);
             redirect(base_url()."index.php/home/users");
             //print_r($info);
           }else{
             $this->session->set_flashdata('msg',"<div class='alert alert-danger'>Invalid Username or Password</div>");
             redirect(base_url()."index.php/home/login");
           }



      }else{
      $this->load->view('loginPage');
      }
     }


  //for logout..................................................
      public function logout(){
        
        $info =[
                'name'    =>NULL,
                'user_id' =>0
             ];

        $this->session->unset_userdata('USER',$info);
        $this->session->set_flashdata('msg',"<div class='alert alert-success'>You have Successfully Logged Out !</div>");
        redirect(base_url()."index.php/home/login");
        
      }








//to join tables i am creating a method 'tablejoin'
public function emp(){
    $this->load->model('Tablejoin','tj');
    $data=$this->tj->getAll();
   // print_r($data);
    $this->load->view('join',['rec'=>$data]);
}}

 ?>
