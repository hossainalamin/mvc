<?php 
class Index extends Tcontroller{
	public function __construct(){
		parent::__construct();
	}
	public function home(){
		//common variable
		$data  = array();
		$table = "tbl_post";
		$table_cat    = "tbl_catagory";
		//model loader
		$post_model   = $this->load->viewModel("PostModel");
		$cat_model    = $this->load->viewModel("Catagory");

		$this->load->view("header");
		//search
		$data['search']  = $cat_model->catList($table_cat);
		$this->load->viewCat("search",$data);
		//Main content
		$data['post'] = $post_model->PostList($table);
		$this->load->viewPost("content",$data);
		//Sidebar content
		$data['cat'] = $cat_model->catList($table_cat);
		$data['latestpost'] = $post_model->LatestPostList($table);
		//loader
		$this->load->viewCat("sidebar",$data);
		$this->load->view("footer");
	}
	public function PostDetail($id){
		//Common local variable
		$data = array();
		$table_post = "tbl_post";
		$table_catagory = "tbl_catagory";

		//Model loader
		$post_model   = $this->load->viewModel("PostModel");
		$cat_model = $this->load->viewModel("Catagory");

		$this->load->view("header");
		//search
		$data['search']  = $cat_model->catList($table_catagory);
		$this->load->viewCat("search",$data);
		//post detail
		$data['postbyid'] = $post_model->GetPostById($table_post,$table_catagory,$id);
		$this->load->viewPost("detail",$data);
		//sidebar
		$data['cat'] = $cat_model->catList($table_catagory);
		$data['latestpost'] = $post_model->LatestPostList($table_post);
		$this->load->viewCat("sidebar",$data);

		$this->load->view("footer");
	}
	public function PostByCat($id){
		//local variable
		$data = array();
		$table_post = "tbl_post";
		$table_catagory = "tbl_catagory";
		//model loader
		$post_model   = $this->load->viewModel("PostModel");
		$cat_model = $this->load->viewModel("Catagory");


		$this->load->view("header");
		//search
		$data['search']  = $cat_model->catList($table_catagory);
		$this->load->viewCat("search",$data);
		//post by catagory
		$data['postbycat'] = $post_model->GetPostByCat($table_post,$table_catagory,$id);
		$this->load->viewPost("postbycat",$data);
		//sidebar
		$data['cat'] = $cat_model->catList($table_catagory);
		$data['latestpost'] = $post_model->LatestPostList($table_post);
		$this->load->viewCat("sidebar",$data);

		$this->load->view("footer");

	}
	public function search(){
		//local variable
		$data = array();
		$keyword  = $_REQUEST['keyword'];
		$catagory = $_REQUEST['cat'];
		$table_post = "tbl_post";
		$table_catagory = "tbl_catagory";
		//model loader
		$post_model   = $this->load->viewModel("PostModel");
		$cat_model = $this->load->viewModel("Catagory");


		$this->load->view("header");
		//search
		$data['search']  = $cat_model->catList($table_catagory);
		$this->load->viewCat("search",$data);
		//post by catagory
		$data['postbysearch'] = $post_model->GetPostBySearch($table_post,$keyword,$catagory);
		$this->load->viewPost("searchresult",$data);
		//sidebar
		$data['cat'] = $cat_model->catList($table_catagory);
		$data['latestpost'] = $post_model->LatestPostList($table_post);
		$this->load->viewCat("sidebar",$data);

		$this->load->view("footer");
	}
}
?>