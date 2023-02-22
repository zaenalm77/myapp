<?php

class blog extends CI_Controller{


	public function  __construct(){
		parent::__construct();
		// $this->load->database();
		//$this->load->helper('url');
		$this->load->model('Blogmodel');
		$this->load->library('upload');

	}


	public function index(){
		
		
		$query=$this->Blogmodel->getblogs();
		$data['blogs']  = $query->result_array();

		$this->load->view('blog',$data);
	}
	public function detail($url){
		

		 $query    			=$this->Blogmodel->getambil('url',$url);
		 $data['blog']		=$query->row_array();
// print_r($data);
		$this->load->view('detail',$data);
		
	}
	public function add(){
		
		 if($this->input->POST()){
		 	$data['title']=$this->input->POST('title');
			$data['content']=$this->input->POST('content');
			$data['url']=$this->input->POST('url');

			 //print_r($data);

				$config['upload_path']          = './uploads/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);


               if (!$this->upload->do_upload('cover'))
									{
									   echo $this->upload->display_errors();
				
									}
									else
									{
									    $data['cover'] = $this->upload->data('file_name');
									}
                  

			$id= $this->Blogmodel->insertBlog($data);
	
			if($id){
				//print_r($data);
				echo"berhasil";
			}else{
				echo"gagal";
			}
   }

		 
	$this->load->view('add');
	}

	public function edit($id){

		$query = $this->Blogmodel->getambil('id', $id);
		$data['blog']=$query->row_array();


		 if($this->input->POST()){

		 	$post['title']=$this->input->POST('title');
			$post['content']=$this->input->POST('content');
			$post['url']=$this->input->POST('url');

		

			$id= $this->Blogmodel->updateBlog($id, $post);
	
			if($id){
				echo"berhasil";
			}else{
				echo"gagal";
			}
  		 }


		$this->load->view('edit', $data);

	}

	public function delete($id){
		$this->Blogmodel->deleteBlog($id);
		redirect('/blog');
	}


	
}