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
	public function PostDitail(){
		
	}
}
?>