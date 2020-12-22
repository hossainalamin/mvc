<?php 
class Index extends Tcontroller{
	public function __construct(){
		parent::__construct();
	}
	public function home(){
		$this->load->viewHome("home");
	}
	public function catagoryModel(){
		$data = array();
		$table = "tbl_catagory";
		$model = $this->load->viewModel("Catagory");
		$data['cat'] = $model->catList($table);
		$this->load->viewCat("catagory",$data);
	}
	public function catById(){
		$data = array();
		$table = "tbl_catagory";
		$id=1;
		$model = $this->load->viewModel("Catagory");
		$data['catbyid'] = $model->catById($table,$id);
		$this->load->viewCat("catbyid",$data);
	}
	public function insertCatagory(){
		$table = "tbl_catagory";
		$data  = array(
			'name'  => 'jewellry',
			'title' => 'This is jewellry'
		);
		$model = $this->load->viewModel("Catagory");
		$data['cat'] = $model->insertCatagory($table,$data);
	}
}
?>