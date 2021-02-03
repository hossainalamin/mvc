<?php 
class Index extends Tcontroller{
	public function __construct(){
		parent::__construct();
	}
	public function home(){
		$this->load->view("header");
		$data = array();
		$table = "tbl_post";
		$model = "PostModel";
		$post_model   = $this->load->viewModel($model);
		$data['post'] = $post_model->PostList($table);
		$this->load->viewPost("content",$data);
		$this->load->view("sidebar");
		$this->load->view("footer");
	}
	public function PostDetail($id){
		$this->load->view("header");
		$data = array();
		$table_post = "tbl_post";
		$table_catagory = "tbl_catagory";
		$model = "PostModel";
		$post_model   = $this->load->viewModel($model);
		$data['postbyid'] = $post_model->GetPostById($table_post,$table_catagory,$id);
		$this->load->viewPost("detail",$data);
		$this->load->view("sidebar");
		$this->load->view("footer");
	}
	public function PostByCat($id){
		$this->load->view("header");
		$data = array();
		$table_post = "tbl_post";
		$table_catagory = "tbl_catagory";
		$model = "PostModel";
		$post_model   = $this->load->viewModel($model);
		$data['postbycat'] = $post_model->GetPostByCat($table_post,$table_catagory,$id);
		$this->load->viewPost("postbycat",$data);
		$this->load->view("sidebar");
		$this->load->view("footer");

	}
}
?>