<?php
class Fileupload extends CI_Controller{
	public function upload(){
		//$this->load->view('file_upload');
		if($this->input->post('submit')){
if(!file_exists("MyUploads")) mkdir("MyUploads");
$config['upload_path'] = './MyUploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = 10000;
$this->load->library('upload', $config);//ci provides us upload object access the same

if ( ! $this->upload->do_upload('file'))
{
$error = array('error' => $this->upload->display_errors());
print_r($error);
}
else
{
$data['FILE'] = array('upload_data' => $this->upload->data());
//print_r($data);
$this->load->view('file_upload',$data);
//$this->load->view('upload_success', $data);
}
	}
	else {
		$this->load->view('file_upload');
	}

}}
   ?>
